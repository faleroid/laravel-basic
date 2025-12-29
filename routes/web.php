<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    $posts = Post::latest();

    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts->filter(request(['search', 'category', 'author']))->latest()->get(),
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Blog',
        'post' => $post,
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => 'Articles by ' . $user->name,
        'posts' => $user->posts,
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Category: ' . $category->name,
        'posts' => $category->posts,
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});


