<?php

namespace App;

class Post_
{
    private static $blog_posts = [
        [
            'title' => 'Post Pertama',
            'slug' => 'post-pertama',
            'writer' => 'Agung Dwi Laksana',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe autem maiores, placeat rerum ipsam at dolor consequatur sit sint. Iste saepe assumenda autem. Explicabo distinctio, incidunt ea laborum ducimus placeat.'
        ], 
        [
            'title' => 'Post Kedua',
            'slug' => 'post-kedua',
            'writer' => 'Lutfiah Qottrun Nada',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis omnis corrupti, sapiente praesentium excepturi dolores veritatis consequuntur natus. Laboriosam cumque maxime distinctio et totam optio perspiciatis accusantium enim sint, a, explicabo ex asperiores nihil fuga eius. Rem fugiat fugit animi ratione libero voluptates nemo, suscipit sapiente reiciendis a facere! At reprehenderit ducimus nesciunt fugiat amet cupiditate corrupti sequi consequuntur, officiis obcaecati fugit ipsa! Distinctio magni voluptas sit consectetur, perspiciatis aperiam, omnis officia obcaecati aut molestias, minima sed! Sit, repellat. Dolore inventore autem nisi dicta tenetur, minima repellat quis magnam cumque iste at. Odio delectus nisi asperiores labore pariatur officia qui cumque magnam ab voluptate et, laudantium magni repellat enim. Magnam, tempora odit! Accusantium adipisci provident perspiciatis. Mollitia assumenda quidem exercitationem consequatur, ad quisquam illum sapiente. Ut neque eos excepturi atque non aliquam assumenda minus accusamus, natus quidem reiciendis, deserunt temporibus blanditiis iste itaque omnis autem? Voluptatibus quibusdam atque deserunt laboriosam?'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
