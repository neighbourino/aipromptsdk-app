<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home', [
            'SEOData' => new SEOData(
                title: 'AI Prompts',
                description: 'Søgbare, danske AI prompts til din foretrukne platform.',
            ),
        ]);
    }

}