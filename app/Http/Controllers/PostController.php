<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::all();
        // dd($posts);
        return view('list', ['posts'=>$posts,]);
    }

    // public function index()
    // {
    //     return view('create');
    // }
}
