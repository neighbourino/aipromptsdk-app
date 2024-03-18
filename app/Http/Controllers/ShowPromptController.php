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
        
 
        return view('prompts.show', compact('prompt'));
        
    }
}
