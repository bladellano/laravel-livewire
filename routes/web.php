<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::name('contacts.')->prefix('contacts')->group(function(){

    Route::get('/',App\Http\Livewire\Contact\ContactIndex::class)->name('index');

    Route::get('/edit/{contact}',App\Http\Livewire\Contact\ContactEdit::class)->name('edit');

    Route::get('/create',App\Http\Livewire\Contact\ContactCreate::class)->name('create');

});
