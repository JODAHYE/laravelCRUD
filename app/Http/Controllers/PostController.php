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

    public function createView()
    {
        return view('create');
    }

    public function showView($id)
    {
        $post = Post::where('id', $id)->first();
        return view('show', ['post'=>$post,]);
    }

    /* 생성 */
    public function createPost(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('post.list');
    }

    /* 삭제 */
    public function deletePost($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('post.list');
    }
}
