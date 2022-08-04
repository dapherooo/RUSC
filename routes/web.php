<?php

use App\Models\Category;
use App\Models\post as ModelsPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\FullCalenderController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => 'home',
    ]);
});

 
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "dap",
        "email"=> "dap88@gmail.com"
    ]);
});


Route::get('/post', [PostController::class, 'index']);
Route::get('post/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()

    ]);
});


Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');})->middleware('auth');


Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class, 'checkSlug'])->Middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->Middleware('auth');

Route::get('/full-calender', [FullCalenderController::class, 'index']);
Route::post('/full-calender/action', [FullCalenderController::class, 'action']);