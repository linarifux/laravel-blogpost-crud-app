<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.allposts', ['posts' => $posts]);
    }

    public function editView(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'body' => request('body'),
        ]);
        return redirect('/');
    }

    public function showPostField()
    {
        return view('post.create-post');
    }

    public function createPost()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/');
    }

    public function destroyPost(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}