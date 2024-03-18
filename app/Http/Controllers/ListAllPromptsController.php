<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ListAllPromptsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       return view('prompts.index', [
            'SEOData' => new SEOData(
                title: 'AI Prompts Biblotek',
                description: 'Søg på danske AI prompts.',
            ),
        ]);
    }
}
