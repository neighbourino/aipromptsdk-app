<?php

namespace App\Livewire\Prompts;

use App\Models\Prompt;
use Livewire\Component;
use Spatie\Tags\Tag;

class IndexPrompts extends Component
{

    #public $prompts;

    public $searchTerm = '';

    public $tagOptions;

    public $tags = [];
    public $types = [];
    public $platforms = [];

    public $platformOptions = [
        'ChatGPT' => 'ChatGPT',
        'Midjourney' => 'Midjourney',
        'Dall-E' => 'Dall-E',
        'adobe-firefly' => 'Adobe Firefly'
    ];

    public $hasActiveFilters = false;

    public function mount()
    {

        $this->tagOptions = Tag::all();
    }

    public function render()
    {

        $this->hasActiveFilters = false;

        $prompts = Prompt::query();

        if (isset($this->tags) && count($this->tags)) {
            $prompts = $prompts->whereHas('tags', function ($q) {
                $q->whereIn('id', $this->tags);
            });

            $this->hasActiveFilters = true;
        }

        if (isset($this->platforms) && count($this->platforms)) {
            $prompts = $prompts->whereIn('platform', $this->platforms);

            $this->hasActiveFilters = true;
        }

        if (isset($this->types) && count($this->types)) {
            $prompts = $prompts->whereIn('type', $this->types);

            $this->hasActiveFilters = true;
        }

        if (isset($this->searchTerm)) {
            $searchTerm = '%' . $this->searchTerm . '%';
            if (trim($this->searchTerm) != '') {
                $prompts = $prompts->where('title', 'LIKE', $searchTerm)->orWhere('description', 'LIKE', $searchTerm);

                $this->hasActiveFilters = true;
            }
        }

        return view('livewire.prompts.index-prompts', [
            'prompts' => $prompts->get()
        ]);
    }


    public function resetFilters()
    {
        $this->tags = [];
        $this->types = [];
        $this->platforms = [];
        $this->searchTerm = '';
    }
}
