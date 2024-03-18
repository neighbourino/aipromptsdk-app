<?php

namespace App\Livewire\Prompts;

use App\Models\Prompt;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ShowPrompt extends Component
{

    public Prompt $prompt;

    public function mount(Prompt $prompt)
    {

        #dd(App::getLocale());


        $this->prompt = $prompt;
    }

    public function render()
    {
        return view('livewire.prompts.show-prompt');
    }
}
