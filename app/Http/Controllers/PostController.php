<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        // dd($posts);
        return view('list', ['posts'=>$posts,]);
    }

    public function showView($id)
    {   
        if(Post::where('id', $id)->doesntExist()){
            return redirect()->route('post.list');
        }
        $post = Post::where('id', $id)->first();
        return view('show', ['post'=>$post,]);
    }

    public function createView()
    {
        return view('create');
    }

    public function createPost(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('post.list');
    }

    public function updateView($id)
    {
        $post = Post::where('id', $id)->first();
        return view('update', ['post'=>$post,]);
    }

    public function updatePost($id)
    {
        $post = Post::where('id', $id)->update([
            'title'=>request('title'),
            'writer'=>request('writer'),
            'content'=>request('content')
        ]);

        return redirect('show/'.$id);
    }

    public function deletePost($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('post.list');
    }

}
