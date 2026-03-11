<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all();

        //$posts = Post::orderBy('id', 'DESC')->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) 
    {
        return view('posts.show', compact('post'));
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        /* $post = Post::create($request->all());

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save(); */

        Mail::to('421003866@cuautitlan.unam.mx')->send(new PostCreateMail($post));

        return redirect()->route('posts.index');
    }

    public function edit(Post $post) 
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => "required|unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required'
        ]);

        $post->update($request->all());

        /* $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save(); */

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

}
