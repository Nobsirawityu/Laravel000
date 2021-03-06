<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\BlogPost;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index',['posts' => BlogPost::all()]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show',['post' => BlogPost::findOrFail($id)]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePost $request)
    {
        $validatedData = $request->validated();
        //ใช้ ::create แทนเลยไม่ต้อง new BlogPost ใหม่และก็ save ให้เลย
        $blogPost = BlogPost::create($validatedData);
        $request->session()->flash('status','Blog post was created!');
        //return redirect()->route('posts.index');
        return redirect()->route('posts.show', ['post' => $blogPost -> id]);
    }

    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }
    
    public function update($id)
    {
        return view('posts.update');
    }
}
