<?php

use App\Http\Livewire\Blog;
use App\Http\Livewire\MyPage;
use App\Http\Livewire\Post;
use App\Http\Livewire\Products;
use App\Http\Livewire\TodoList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/my-page', MyPage::class);
        Route::get('/todo-list', TodoList::class);
        Route::get('/post', Post::class);
        Route::get('/products', Products::class);
    });
