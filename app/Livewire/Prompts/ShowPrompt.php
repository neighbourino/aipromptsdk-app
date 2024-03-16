<?php

namespace App\Livewire\Prompts;

use App\Models\Prompt;
use Livewire\Component;

class ShowPrompt extends Component
{

    public Prompt $prompt;

    public function mount(Prompt $prompt){
        $this->prompt = $prompt;
    }

    public function render()
    {
        return view('livewire.prompts.show-prompt');
    }
}
