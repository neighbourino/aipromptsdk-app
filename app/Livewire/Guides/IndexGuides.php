<?php

namespace App\Livewire\Guides;

use App\Models\Guide;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class IndexGuides extends Component
{

    use WithPagination;

    public function mount(Request $request)
    {
        #dd($request);
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
