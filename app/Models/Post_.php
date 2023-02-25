<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Effan Najwaini",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia illum ratione unde amet provident voluptas necessitatibus quod repellendus repellat deserunt voluptate dolorem culpa, in modi cumque atque! Pariatur modi aliquam eius tenetur, inventore rem odio nesciunt vero minus libero sint recusandae earum illo omnis non magnam, repellendus, cupiditate at explicabo.",
        ],
        [
            "title" => "Judul Post Kedua tes",
            "slug" => "judul-post-kedua",
            "author" => "Siapa Aja",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quasi corporis asperiores voluptas libero. Reiciendis ut doloremque rerum quia aperiam facere! Rerum laudantium eos facilis enim, aspernatur perspiciatis iure quaerat nulla officia ullam soluta, maiores reprehenderit eum cum, fuga provident. Eaque, ad exercitationem voluptatibus provident optio impedit magnam voluptate dolor inventore quam quasi saepe illo, perspiciatis eveniet quos dolores dignissimos necessitatibus culpa rem. Corporis doloribus nostrum molestiae nisi porro fuga optio laudantium, quaerat mollitia error modi id esse fugiat molestias aspernatur ex ut minus adipisci aliquam dolores maxime! Incidunt blanditiis facere, deleniti totam ad fuga non ut modi sapiente voluptatibus?",
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
