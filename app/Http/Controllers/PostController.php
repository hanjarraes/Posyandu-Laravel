<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Post",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "single post",
            "posts" => $post
        ]);
    }
}
