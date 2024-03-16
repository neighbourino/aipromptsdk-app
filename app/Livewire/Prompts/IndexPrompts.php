<?php

namespace App\Livewire\Prompts;

use App\Models\Prompt;
use Livewire\Component;

class IndexPrompts extends Component
{

    public $prompts;

    public function render()
    {

        $this->prompts = Prompt::all();

        return view('livewire.prompts.index-prompts');
    }
}
