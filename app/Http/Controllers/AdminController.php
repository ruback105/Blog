<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user() && Auth::user()->role == 'moderators') {
            return view('user.admin')->with(
                'users',
                User::orderBy('updated_at', 'DESC')->get()
            );
        }

        return redirect('/')->with('error', "You don't gave admin access");
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
            'email' => 'required|string|email|max:255|unique:users,id,' . $id,
        ]);

        User::where('id', $id)->update([
            'name' => $request->input('name') ? $request->input('surname') : '',
            'surname' => $request->input('surname')
                ? $request->input('surname')
                : '',
            'email' => $request->input('email'),
            'role' => $request->input('role') ? $request->input('surname') : '',
        ]);

        return back()->with('success', 'You have successfully updated user.');
    }
}
