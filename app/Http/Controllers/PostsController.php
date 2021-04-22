<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with(
            'recentPosts',
            Post::orderBy('updated_at', 'DESC')->paginate(10)
        );
    }

    public function post()
    {
        return view('posts.post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_path' => 'required',
            'category' => 'required',
        ]);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'likes' => 0,
            'slug' => SlugService::createSlug(
                Post::class,
                'slug',
                $request->title
            ),
            'image_path' => $request->input('image_path'),
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/posts')->with(
            'message',
            'Your post has been created'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('posts.show')->with(
            'post',
            Post::where('slug', $slug)->first()
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('posts.edit')->with(
            'post',
            Post::where('slug', $slug)->first()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        Post::where('slug', $slug)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'slug' => SlugService::createSlug(
                Post::class,
                'slug',
                $request->title
            ),
            'image_path' => $request->input('image_path'),
        ]);

        return redirect('/posts')->with(
            'message',
            'Your post has been updated!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
