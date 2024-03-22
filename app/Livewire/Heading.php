<?php

namespace App\Livewire;

use Livewire\Component;

class Heading extends Component
{

    public $info;

    public function mounted($info)
    {

        dd($info);

        $this->info = $info;
    }

    public function render()
    {
        return view('livewire.heading');
    }
}
