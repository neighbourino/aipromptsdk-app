<?php

use App\Livewire\Prompts\IndexPrompts;
use App\Livewire\Prompts\ShowPrompt;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/prompts', IndexPrompts::class)->name('prompts.index');

Route::get('/prompts/{id}', ShowPrompt::class)->name('prompts.show');


Route::get('/guides', function () {
    return view('guides.index');
})->name('guides.index');

Route::get('/artikler', function () {
    return view('articles.index');
})->name('articles.index');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
