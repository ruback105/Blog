@extends('layouts.app')

@section('content')
    <div class="flex flex-col 2xl:flex-row justify-center items-center 2xl:items-start pt-20 px-5">
        <div class="post">
            <div class="flex flex-col items-start justify-start mx-auto w-full md:w-3/4">
                <div class="mb-5">
                    <h1 class="title font-extrabold text-3xl mb-5">{{ $post->title }}</h1>
                    <p class="content font-semibold text-xl">
                        {{ $post->description }}
                    </p>
                </div>
                <div class="image w-full">
                    <img src="{{ $post->image_path }}" class="mx-auto" alt="">
                </div>
                <div class="wrapper flex flex-row items-center w-full justify-center">
                    <div class="buttons flex flex-row flex-wrap justify-start w-full my-3">
                        <i class="fas fa-heart fa-2x px-2  text-green-500 hover:text-red-500 cursor-pointer"></i>
                        <i class="fas fa-heart-broken fa-2x px-2  text-green-500 hover:text-red-500 cursor-pointer"></i>
                        <i class="fas fa-comment fa-2x px-2  text-green-500 hover:text-red-500 cursor-pointer"></i>
                        <i class="fas fa-share fa-2x px-2  text-green-500 hover:text-red-500 cursor-pointer"></i>
                    </div>
                    <button class="background-main rounded-3xl text-xl py-3 px-10 font-semibold">Edit</button>
                </div>
            </div>
        </div>
        <div class="comments 2xl:w-3/4 shadow-md py-5 px-3">
            <ul>
                <li class="flex flex-row items-center justify-center py-3 text-lg md:text-xl font-semibold">
                    <div class="rating flex flex-col items-center justify-center">
                        <i class="fas fa-heart pr-2 text-green-500 hover:text-red-500 cursor-pointer"></i>
                        <div class="score text-center pr-2 py-2">10</div>
                        <i class="fas fa-heart-broken pr-2 text-green-500 hover:text-red-500 cursor-pointer"></i>
                    </div>
                    <p class="text">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Rerum veniam
                        pariatur possimus, dicta quaerat
                        debitis sequi eligendi et earum quo.r
                    </p>
                </li>
            </ul>
        </div>
    </div>
@endsection
