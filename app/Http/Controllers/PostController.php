<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('home', [
            'posts' => $posts,
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts/createPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'anime' => 'string|max:255|required',
            'title' => 'string|max:255|required',
            'body' => 'string|max:500|required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/posts'), $imageName);

        Post::create([
            'image' => 'images/posts/' . $imageName,
            'anime' => $request['anime'],
            'title' => $request['title'],
            'body' => $request['body'],
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
