<?php


use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Hafiz Anwar', 'title'=>'About Me']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'My Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'judul' => 'Judul Artikel 1',
            'author' => 'Hafiz Anwar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, voluptates unde amet
            ad placeat provident deleniti eius facilis. Tempora repellendus sint expedita minus commodi voluptatibus
            veritatis cupiditate dicta necessitatibus ex!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'judul' => 'Judul Artikel 2',
            'author' => 'Naufal Latif',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero beatae odio eius cum
            vitae quos perspiciatis suscipit ex iure? Sit mollitia ducimus natus libero optio maxime nemo, sequi est
            eligendi.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'judul' => 'Judul Artikel 1',
            'author' => 'Hafiz Anwar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, voluptates unde amet
            ad placeat provident deleniti eius facilis. Tempora repellendus sint expedita minus commodi voluptatibus
            veritatis cupiditate dicta necessitatibus ex!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'judul' => 'Judul Artikel 2',
            'author' => 'Naufal Latif',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero beatae odio eius cum
            vitae quos perspiciatis suscipit ex iure? Sit mollitia ducimus natus libero optio maxime nemo, sequi est
            eligendi.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [ 'title' => 'Single Post', 'post' => $post ]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact']);
});

