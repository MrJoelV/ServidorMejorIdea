<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::take(3)->latest()->get();
        return view("index", compact("posts"));
        // return  $post;
    }


}
