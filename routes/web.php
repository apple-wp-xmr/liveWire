<?php

use App\Livewire\Counter;
use App\Livewire\Form;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class)->name('posts');
Route::get('/form', Form::class);
