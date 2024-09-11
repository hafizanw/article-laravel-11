<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'judul' => 'Judul Artikel 1',
                'author' => 'Hafiz Anwar',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, voluptates unde amet
                ad placeat provident deleniti eius facilis. Tempora repellendus sint expedita minus commodi voluptatibus
                veritatis cupiditate dicta necessitatibus ex!',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'judul' => 'Judul Artikel 2',
                'author' => 'Naufal Latif',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero beatae odio eius cum
                vitae quos perspiciatis suscipit ex iure? Sit mollitia ducimus natus libero optio maxime nemo, sequi est
                eligendi.',
            ],
        ];
    }

    public static function find($slug)
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;

    }

}
