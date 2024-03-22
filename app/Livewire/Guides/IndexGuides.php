<?php

namespace App\Livewire\Guides;

use App\Models\Guide;
use Livewire\Component;
use Livewire\WithPagination;

class IndexGuides extends Component
{

    use WithPagination;

    public function mounted()
    {
    }

    public function render()
    {
        return view(
            'livewire.guides.index-guides',
            [
                'guides' => Guide::paginate(10),
            ]
        );
    }
}
