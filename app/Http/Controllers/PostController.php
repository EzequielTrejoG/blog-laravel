<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all();

        //$posts = Post::orderBy('id', 'DESC')->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(10);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($post) 
    {
        $post = Post::find($post);
        /*return view('posts.show', [
            'post' => $post
        ]);*/
        return view('posts.show', compact('post'));
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();

        return redirect(route('posts.index'));
    }

    public function edit($post) 
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $post = Post::find($post);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();

        return redirect(route('posts.show', $post->id));
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();

        return redirect(route('posts.index'));
    }

}
