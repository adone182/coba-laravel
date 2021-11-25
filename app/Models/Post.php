<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Donirho",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi totam nam laudantium accusantium rerum eos eveniet laboriosam harum, quae debitis blanditiis aut natus ut eum autem iste dolores iusto. Voluptas?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gibran Khalil",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias itaque dolores velit recusandae omnis. Ullam omnis quis eius non quas explicabo earum velit, odit vitae sit! Suscipit veritatis eligendi aut. Deleniti error placeat velit fuga commodi. Debitis, vero, iusto sint ea animi harum explicabo at laborum dolores iste tempora nostrum. Aut recusandae pariatur nam omnis, laudantium, enim atque dolor animi laborum maiores natus debitis aliquid modi impedit eius ullam facere saepe iure ducimus rerum, dolorem repellat tempora quod? Sint soluta facere delectus, ab iste, ipsam excepturi, voluptas in harum fugit tenetur? A temporibus ducimus necessitatibus sapiente provident eligendi deserunt possimus."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
