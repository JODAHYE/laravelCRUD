<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::all();
        // dd($posts);
        return view('list', ['posts'=>$posts,]);
    }

    public function createView()
    {
        return view('create');
    }

    public function showView($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('show', ['post'=>$post,]);
    }

    public function createPost(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('post.list');
    }
}
