<?php

namespace App\Models;

class post{
    private static $blog_posts = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "Judul-Blog-Pertama",
            "author" => "Muhammad Amirul",
            "ringkas" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias."
        ],
        [
            "title" => "Judul Blog Kedua",
            "author" => "Muhammad Alif",
            "slug" => "Judul-Blog-Kedua",
            "ringkas" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos ducimus 
            reprehenderit nihil vel sit sed deleniti quis accusamus rerum saepe perspiciatis, mollitia quam dolorum, 
            ipsum aliquam tempora dolore beatae quidem doloribus quae, itaque animi exercitationem alias."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}