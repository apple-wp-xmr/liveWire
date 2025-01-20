<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Counter;
use App\Livewire\EditProfile;
use App\Livewire\Form;
use App\Livewire\ShowPosts;
use App\Livewire\Singup;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' =>['auth']], function () {
    Route::get('/profile', EditProfile::class);
}); 


Route::get('/todos', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class)->name('posts');
Route::get('/form', Form::class);




require __DIR__.'/auth.php';
