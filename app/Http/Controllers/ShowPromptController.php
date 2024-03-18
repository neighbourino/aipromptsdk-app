<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;

class ShowPromptController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Prompt $prompt)
    {
        
        // $prompt->seo->update([
        //     'title' => $prompt->title,
        //     'description' => $prompt->short_description,
        // ]);

        return view('prompts.show', compact('prompt'));
        
    }
}
