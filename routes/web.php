<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blogs', function () {
    $posts = [
        [
            'slug' => 'post-1',
            'title' => 'Post 1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
            Lorem
            ipsum
            dolor sit amet
            consectetur adipisicing elit. Esse in eius, molestias explicabo aliquam dignissimos ducimus natus autem,
            mollitia distinctio corrupti eaque reiciendis aut animi ipsum optio molestiae placeat quod.',
        ],
        [
            'slug' => 'post-2',
            'title' => 'Post 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
            Lorem
            ipsum
            dolor sit amet
            consectetur adipisicing elit. Esse in eius, molestias explicabo aliquam dignissimos ducimus natus autem,
            mollitia distinctio corrupti eaque reiciendis aut animi ipsum optio molestiae placeat quod.',
        ],
        [
            'slug' => 'post-3',
            'title' => 'Post 3',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
            Lorem
            ipsum
            dolor sit amet
            consectetur adipisicing elit. Esse in eius, molestias explicabo aliquam dignissimos ducimus natus autem,
            mollitia distinctio corrupti eaque reiciendis aut animi ipsum optio molestiae placeat quod.',
        ],
    ];

    return view('blogs', [
        'title' => 'Blog',
        'posts' => $posts,
    ]);
});

Route::get('/blogs/{slug}', function ($slug) {
    $posts = [
        [
            'slug' => 'post-1',
            'title' => 'Post 1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
            Lorem
            ipsum
            dolor sit amet
            consectetur adipisicing elit. Esse in eius, molestias explicabo aliquam dignissimos ducimus natus autem,
            mollitia distinctio corrupti eaque reiciendis aut animi ipsum optio molestiae placeat quod.',
        ],
        [
            'slug' => 'post-2',
            'title' => 'Post 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
            Lorem
            ipsum
            dolor sit amet
            consectetur adipisicing elit. Esse in eius, molestias explicabo aliquam dignissimos ducimus natus autem,
            mollitia distinctio corrupti eaque reiciendis aut animi ipsum optio molestiae placeat quod.',
        ],
        [
            'slug' => 'post-3',
            'title' => 'Post 3',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
            Lorem
            ipsum
            dolor sit amet
            consectetur adipisicing elit. Esse in eius, molestias explicabo aliquam dignissimos ducimus natus autem,
            mollitia distinctio corrupti eaque reiciendis aut animi ipsum optio molestiae placeat quod.',
        ],
    ];

    $post = arr::first(
        $posts,
        function ($post) use ($slug) {
            return $post['slug'] == $slug;
        }
    );

    return view('blog', ['title' => 'Blog', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});


