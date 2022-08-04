<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller

{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('post',[
            "title" => "All Event".$title,
            "active" => 'post',
            // "posts" => Post::all()
            "posts" => Post::latest()->Cari(request(['search', 'category','author']))->paginate(7)->withQueryString()
        ]);
    }
    
    public function show(Post $post)
    {
        return view('postsingle',[
            "title" => "Single Post",
            "active" => 'post',
            "post" => $post
        ]);
    }
}
