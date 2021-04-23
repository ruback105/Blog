<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'post_slug' => 'required',
        ]);

        Comments::create([
            'post_slug' => $request->input('post_slug'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
        ]);

        return Redirect::back()->with(
            'message',
            'Your comment has been saved!'
        );
    }
}
