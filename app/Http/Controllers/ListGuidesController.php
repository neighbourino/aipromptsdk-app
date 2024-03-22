<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ListGuidesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('guides.index', [
            'SEOData' => new SEOData(
                title: 'AI Prompts Guides',
                description: '',
            ),
        ]);
    }
}
