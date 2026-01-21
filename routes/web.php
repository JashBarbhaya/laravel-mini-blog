<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    
    //$posts = Post::where('user_id', auth()->id())->get();
    $posts = [];
    if(auth()->check()){
        $posts = auth()->user()->usersCoolPosts()->latest()->get();
    }
    return view('home',['posts' => $posts]);
});

// Route::post('/register', function () {
//     // Handle registration logic here
//     return 'Registration successful! Thank You';
// });

Route::post('/register', [UserController::class, 'register']);

Route:: post('/logout',[UserController::class,'logout']);

Route:: post('/login',[UserController::class,'login']);

//blog posts routes will go here
Route::post('/create-post', [PostController::class, 'createPost'])
    ->middleware('auth');

Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen'])
    ->middleware('auth');

Route::put('/edit-post/{post}', [PostController::class, 'updatePost'])
    ->middleware('auth');

Route::delete('/delete-post/{post}', [PostController::class, 'deletePost'])
    ->middleware('auth');