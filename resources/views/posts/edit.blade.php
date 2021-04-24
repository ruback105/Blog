@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="px-5 mb-4 text-gray-50 bg-green-500 rounded-2xl py-2 w-fit-content">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif
    @if (Auth::check())
        @if ($errors->any())
            <div class="errors w-4/5 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="pl-5 mb-4 text-gray-50 bg-red-500 rounded-2xl py-2">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data"
            class="new flex flex-col flex-wrap mt-10 w-4/5 mx-auto">
            @csrf
            @method('PUT')
            <h1 class="title font-extrabold text-xl mt-10">Post Edit</h1>
            <input type="text" name="title" class="title px-3 py-3 mt-5" value="{{ $post->title }}">
            <textarea class="description px-3 py-3 mt-5 min-h-90" name="description">{{ $post->description }}</textarea>
            <select name="category" class="category px-3 py-3 mt-5">
                <option value="animals">Animals</option>
                <option value="gaming">Gaming</option>
                <option value="rtu">RTU</option>
            </select>
            <input type="file" name="post_image" class="py-3 mt-5" class="form-control">
            <button type="submit"
                class="background-main rounded-3xl text-xl py-3 px-6 font-semibold mt-5 w-full max-w-xs mx-auto">Update
                post</button>
        </form>
    @endif
@endsection
