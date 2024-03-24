<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ShowPromptController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Prompt $prompt)
    {

        #if (Auth::check() && Auth::user()->hasRole('admin')) {
        #return abort(403);
        #}

        #dd($prompt->status != 'pulsihed');
        if ($prompt->status != 'published') {

            return abort(404);

            #return view('prompts.missing-translation');
        }

        return view('prompts.show', compact('prompt'));
    }
}
