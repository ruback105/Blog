@extends('layouts.app')

@section('content')
    <div class="flex flex-col 2xl:flex-row justify-center items-center 2xl:items-start pt-20 px-5">
        <div class="post">
            <div class="flex flex-col items-start justify-start mx-auto w-full md:w-3/4">
                <div class="mb-5 flex flex-col justify-between w-full">
                    <div class="col-left mb-5 md:mb-0">
                        <h1 class="title font-extrabold text-lg md:text-3xl mb-5">{{ $post->title }}</h1>
                        <p class="content font-semibold text-sm md:text-xl">
                            {{ $post->description }}
                        </p>
                    </div>
                    <div class="col-right flex flex-row items-center justify-between w-full md:w-auto mt-5">
                        <p class="title font-semibold text-lg md:text-3xl">By
                            <span class="font-extrabold">
                                {{ $post->user->name }}
                            </span>
                        </p>
                        <p class="content font-semibold text-sm md:text-xl md:text-right">
                            {{ date('jS M Y', strtotime($post->created_at)) }}
                        </p>
                    </div>
                </div>
                <div class="image w-full">
                    <img src="{{ $post->image_path }}" class="mx-auto" alt="">
                </div>

                <div class="wrapper flex flex-row justify-between w-full mt-3">
                    <div class="rating flex flex-row items-center justify-center">
                        <i class="fas fa-heart pr-4 text-green-500 hover:text-red-500 cursor-pointer fa-2x"></i>
                        <div class="text-center py-2 text-xl font-semibold">10</div>
                        <i class="fas fa-heart-broken pl-4 text-green-500 hover:text-red-500 cursor-pointer fa-2x"></i>
                    </div>
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <div class="buttons flex flex-row">
                            <a href="/posts/{{ $post->slug }}/edit"
                                class="background-main rounded-3xl text-xl font-semibold py-3 px-10 mr-3">Edit</a>
                            <form action="/posts/{{ $post->slug }}" method="POST"
                                class="bg-red-500 rounded-3xl text-xl py-3 px-10 font-semibold">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-xl font-semibold">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @isset($comments)
            <ul class="comments 2xl:w-3/4  py-5 px-3 w-full">
                @foreach ($comments as $comment)
                    <li
                        class="flex flex-col md:flex-row items-center justify-between py-3 text-lg md:text-xl font-semibold shadow-md px-5">
                        <div class="col-left flex flex-col md:flex-row items-center">
                            <div class="rating flex flex-row md:flex-col items-center justify-center">
                                <i class="fas fa-heart pr-2 text-green-500 hover:text-red-500 cursor-pointer"></i>
                                <div class="text-center pr-2 py-2">10</div>
                                <i class="fas fa-heart-broken pr-2 text-green-500 hover:text-red-500 cursor-pointer"></i>
                            </div>
                            <p class="text px-5">
                                {{ $comment->content }}
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center items-center md:justify-end md:items-end w-full md:w-1/4 mt-5 md:mt-0">
                            <p class="text-black mb-3 text-right">By
                                <span class="name font-semibold text-lg">
                                    {{ $comment->user->name }}
                                </span>
                            </p>
                            <p class="created_at text-black text-lg text-right">
                                {{ date('jS M Y', strtotime($comment->created_at)) }}
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endisset
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
            <form action="/store/comment" method="POST" enctype="multipart/form-data"
                class="flex flex-col flex-wrap mt-10 w-4/5 mx-auto">
                @csrf
                <input name="post_slug" value="{{ $post->slug }}" hidden />
                <textarea class="description px-3 py-3 mt-5 min-h-90" name="content" placeholder="Your comment"></textarea>
                <button type="submit"
                    class="background-main rounded-3xl text-xl py-3 px-6 font-semibold mt-5 w-full max-w-xs mx-auto">Create
                    comment</button>
            </form>
        @endif
    </div>
@endsection
