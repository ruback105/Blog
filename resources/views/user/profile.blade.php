@extends('layouts.app')

@section('content')
    @isset($user)
        <div class="section mt-32 mx-auto w-3/4">
            <h1 class="font-extrabold text-2xl">Your Profile</h1>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="wrapper flex flex-col md:flex-row justify-between mt-10">
                <div class="col-left w-full md:w-1/2">
                    <img src="{{ $user->avatar_path }}" alt="avatar"
                        class="h-full w-full md:w-3/4 shadow-md object-cover mb-5 md:mb-0 rounded-full text-center">
                </div>
                <div class="col-right w-full md:w-1/2">
                    <form class="flex flex-col" action="/profile/{{ Auth::user()->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col md:flex-row w-full justify-between items-center">
                            <label class="font-semibold mb-3 md:mb-0" for="name">Name</label>
                            <input type=" text" name="name" class="name pl-3 py-5 ml-0 md:ml-5 w-full md:w-3/4"
                                value="{{ $user->name }}">
                        </div>
                        <div class="flex flex-col md:flex-row w-full justify-between items-center mt-5">
                            <label class="font-semibold mb-3 md:mb-0" for="surname">Surname</label>
                            <input type="text" name="surname" class="surname pl-3 py-5 ml-0 md:ml-5 w-full md:w-3/4"
                                value="{{ $user->surname }}">
                        </div>
                        <div class="flex flex-col md:flex-row w-full justify-between items-center mt-5">
                            <label class="font-semibold mb-3 md:mb-0" for="email">Email</label>
                            <input type="email" name="email" class="email pl-3 py-5 ml-0 md:ml-5 w-full md:w-3/4"
                                value="{{ $user->email }}" />
                        </div>
                        <div class="flex flex-col md:flex-row w-full justify-between items-center mt-5">
                            <label class="font-semibold mb-3 md:mb-0" for="image">Profile photo</label>
                            <input type="file" name="image" class="ml-0 md:ml-5 w-full md:w-3/4" class="form-control"
                                value="{{ $user->avatar_path }}">
                        </div>

                        <button type="submit"
                            class="background-main rounded-3xl text-xl py-3 px-6 font-semibold mt-10 w-full max-w-xs mx-auto">Save
                            data</button>
                    </form>
                </div>
            </div>
        </div>
    @endisset
@endsection
