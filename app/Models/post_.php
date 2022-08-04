<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class post
{
    private static $post = [
        [
            "title" => "judul 1",
            "slug" => "judul-1",
            "author" => "herooo",
            "body" =>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsam asperiores animi quia debitis? Atque doloremque voluptatem laborum beatae aliquam voluptatibus dicta molestiae at non, quam ratione deleniti placeat, aperiam itaque fuga. Suscipit, quidem! Nam facere enim tempora voluptatem quasi error, placeat dignissimos, cumque deleniti delectus commodi earum maxime natus explicabo iste inventore fugiat odio ratione ipsam unde autem architecto. Quo, mollitia corrupti! Eos distinctio aspernatur itaque sit. Ab voluptatibus eum similique officiis laborum quasi excepturi quia commodi ducimus laboriosam distinctio expedita odit cum incidunt tenetur animi, id, magni, beatae et soluta. Labore quos cumque repudiandae accusantium aut fuga totam?"
        ],
        [
            "title" => "judul 2",
            "slug" => "judul-2",
            "author" => "hero",
            "body" =>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsam asperiores animi quia debitis? Atque doloremque voluptatem laborum beatae aliquam voluptatibus dicta molestiae at non, quam ratione deleniti placeat, aperiam itaque fuga. Suscipit, quidem! Nam facere enim tempora voluptatem quasi error, placeat dignissimos, cumque deleniti delectus commodi earum maxime natus explicabo iste inventore fugiat odio ratione ipsam unde autem architecto. Quo, mollitia corrupti! Eos distinctio aspernatur itaque sit. Ab voluptatibus eum similique officiis laborum quasi excepturi quia commodi ducimus laboriosam distinctio expedita odit cum incidunt tenetur animi, id, magni, beatae et soluta. Labore quos cumque repudiandae accusantium aut fuga totam?"
        ]
    ];

    public static function all()
    {
        return collect(Self ::$post);
    }

    public static function find($slug)
    {
        $posts = static ::all();
        return $posts->firstwhere('slug',$slug);
    }
}
