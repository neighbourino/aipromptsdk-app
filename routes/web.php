<?php

use App\Livewire\Prompts\ShowPrompt;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;
use App\Livewire\Prompts\IndexPrompts;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowPromptController;
use App\Http\Controllers\ListAllPromptsController;
use App\Http\Controllers\ListGuidesController;
use App\Http\Controllers\ShowGuideController;

Route::localized(
    function () {

        Route::get(Lang::uri('/'), HomeController::class)->name('home');


        Route::get('/prompts', ListAllPromptsController::class)->name('prompts.index');

        Route::get('/prompts/{prompt}', ShowPromptController::class)->name('prompts.show');

        Route::get('/guides', ListGuidesController::class)->name('guides.index');
        #Route::get('/guides/{tag}', ListGuidesController::class)->name('guides.tag');

        Route::get('/guides/{guide}', ShowGuideController::class)->name('guides.show');

        Route::get('/artikler', function () {
            return view('articles.index');
        })->name('articles.index');
    }
);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
