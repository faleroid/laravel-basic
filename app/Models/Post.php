<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Post
{
    public static function all()
    {
        $post = [
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
            ]
        ];

        return $post;
    }

    public static function find($slug)
    {
        $posts = Arr::first(Post::all(), fn($post) => $post['slug'] == $slug);

        if (!$posts) {
            abort(404);
        }

        return $posts;
    }
}
