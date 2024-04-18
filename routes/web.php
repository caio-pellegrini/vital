<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::match(['get', 'post'], '/test-openai', [ChatGPTController::class, 'chat'])->name('send-message');

Route::get('calculadoras', function () {
    return view('calculadoras');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/info', function () {
    return view('info');
})->name('info');




require __DIR__.'/auth.php';