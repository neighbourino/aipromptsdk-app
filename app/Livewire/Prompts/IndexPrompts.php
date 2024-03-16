<?php

namespace App\Livewire\Prompts;

use App\Models\Prompt;
use Livewire\Component;
use Spatie\Tags\Tag;

class IndexPrompts extends Component
{

    #public $prompts;

    public $tagOptions;

    public $tags = [];
    public $types = [];

    public $hasActiveFilters = false;

    public function mount(){

        $this->tagOptions = Tag::all();
    }

    public function render()
    {

        $prompts = Prompt::query();

        if(isset($this->tags) && count($this->tags)) {
            $prompts = $prompts->whereHas('tags', function ($q) {
                $q->whereIn('id', $this->tags);

            });

            $this->hasActiveFilters = true;
        }

        if(isset($this->types) && count($this->types)) {
            $prompts = $prompts->whereIn('type', $this->types);

            $this->hasActiveFilters = true;
        }

        return view('livewire.prompts.index-prompts', [
            'prompts' => $prompts->get()
        ]);
    }


    public function resetFilters() {
        $this->tags = [];
    }

}
