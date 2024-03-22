<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

class ShowGuideController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Guide $guide)
    {
        return view('guides.show', compact('guide'));
    }
}
