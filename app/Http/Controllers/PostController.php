<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts' ));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        Post::create($request->all());

        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post = Post::find($id);
        $comments = Comment::all();
        return view('admin.post.show', compact('post' , 'comments'));
    }
}
