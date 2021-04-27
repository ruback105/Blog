<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile')->with('user', Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|string|email|max:255|unique:users,id,' . $id,
        ]);

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $avatar_path = isset($imageName)
            ? '/images/' . $imageName
            : Auth::user()->avatar_path;

        User::where('id', $id)->update([
            'name' => $request->input('name') ? $request->input('surname') : '',
            'surname' => $request->input('surname')
                ? $request->input('surname')
                : '',
            'email' => $request->input('email'),
            'avatar_path' => $avatar_path,
        ]);

        return back()->with(
            'success',
            'You have successfully updated profile.'
        );
    }
}
