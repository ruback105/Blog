@extends('layouts.app')

@section('content')

    <div class="wrapper flex flex-col-reverse md:flex-row pt-20 px-5">
        <div class="col-left md:w-full">
            <div class="recent pb-10">
                <h2 class="text-2xl font-semibold">Recent posts</h2>
                <div
                    class="posts flex flex-row justify-between xl:justify-start flex-wrap items-center xl:gap-10 xl:mt-10 ">
                    @foreach ($recentPosts as $post)
                        <div
                            class="md:relative post md:overflow-hidden wrapper flex flex-col-reverse md:flex-row justify-between items-center sm:w-49 xl:w-30 mt-5 xl:mt-0 shadow-md">
                            <div
                                class="data flex-col justify-between items-center md:items-start text-center md:text-left md:px-5 w-4/5 md:w-full">
                                <h1 class="title text-sm md:text-xl font-semibold text-black md:text-white py-4">
                                    {{ $post->title }}
                                </h1>
                                <p class="content text-sm md:text-lg overflow-hidden md:text-white h-14 md:h-24 mb-5">
                                    {{ $post->description }}
                                </p>
                                <div class="mb-5 md:mb-8 flex flex-row items-center justify-between">
                                    <a href="/posts/{{ $post->slug }}"
                                        class="background-main rounded-3xl text-sm md:text-xl text-black md:text-white py-3 px-6 font-semibold">Show
                                        more</a>
                                    <div class="flex flex-col justify-center items-center">
                                        <p class="text-black md:text-white mb-3">By
                                            <span class="name font-semibold text-lg ">
                                                {{ $post->user->name }}
                                            </span>
                                        </p>
                                        <p class="created_at text-black md:text-white text-lg">
                                            {{ date('jS M Y', strtotime($post->created_at)) }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="image md:absolute md:t-0 md:l-0 md:h-full md:w-full md:object-cover z--1">
                                <img src="{{ $post->image_path }}" class="md:h-full md:w-full md:object-cover" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="popular pb-10">
                <h2 class="text-xl font-semibold">Popular posts</h2>
                <div class="posts flex flex-row justify-between flex-wrap items-center">
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 pr-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 pl-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 px-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 px-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="random pb-10">
                <h2 class="text-xl font-semibold">Random posts</h2>
                <div class="posts flex flex-row justify-between flex-wrap items-center">
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 pr-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 pl-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 px-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="post wrapper flex flex-row justify-between items-center w-2/4 px-5 py-5">
                        <div class="data flex-col justify-between items-start">
                            <h1 class="title text-xl font-semibold text-black py-4">Title 1</h1>
                            <p class="content text-lg overflow-hidden h-18 pb-4">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit.
                                Repudiandae quo
                                sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                            <a href="/post"
                                class="background-main rounded-3xl text-xl text-black py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                        <div class="image">
                            <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <ul class="col-right md:w-1/5 flex flex-row md:flex-col justify-start flex-wrap md:pl-5">
            <a href="/post" class="pb-10 text-xl font-semibold w-1/2 sm:w-1/3 md:w-full">Category 1</a>
            <a href="/post" class="pb-10 text-xl font-semibold w-1/2 sm:w-1/3 md:w-full">Category 2</a>
            <a href="/post" class="pb-10 text-xl font-semibold w-1/2 sm:w-1/3 md:w-full">Category 3</a>
        </ul> --}}
    </div>
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
        <form action="/store/post" method="POST" enctype="multipart/form-data"
            class="new flex flex-col flex-wrap mt-10 w-4/5 mx-auto">
            @csrf
            <h1 class="title font-extrabold text-xl">Create new post</h1>
            <input type="text" name="title" class="title px-3 py-3 mt-5" placeholder="Title">
            <textarea class="description px-3 py-3 mt-5 min-h-90" name="description" placeholder="Description"></textarea>
            <select name="category" class="category px-3 py-3 mt-5">
                <option value="animals">Animals</option>
                <option value="gaming">Gaming</option>
                <option value="rtu">RTU</option>
            </select>
            <input type="file" name="post_image" class="py-3 mt-5" class="form-control">
            <button type="submit"
                class="background-main rounded-3xl text-xl py-3 px-6 font-semibold mt-5 w-full max-w-xs mx-auto">Create
                post</button>
        </form>
    @endif
@endsection
