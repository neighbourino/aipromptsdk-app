<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ShowPromptController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Prompt $prompt)
    {

        #dd(App::getLocale(), $prompt);
        #   app()->setLocale('en');

        return view('prompts.show', compact('prompt'));
    }
}
