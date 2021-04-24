@extends('layouts.app')

@section('content')
    <section class="users mt-20 w-11/12 mx-auto">
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
        <div class="tab flex flex-row w-full my-5">
            <span class="w-1/6 text-center font-semibold">ID</span>
            <span class="w-1/6 text-center font-semibold">Name</span>
            <span class="w-1/6 text-center font-semibold">Surname</span>
            <span class="w-1/6 text-center font-semibold">Email</span>
            <span class="w-1/6 text-center font-semibold">Role</span>
            <span class="w-1/6 text-center font-semibold"></span>
        </div>
        @foreach ($users as $user)
            <form class="wrapper flex flex-row w-full mt-1" action="/admin/{{ $user->id }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="id" value="{{ $user->id }}" class="w-1/6 border-gray-700 border-2 pl-2"
                    disabled>
                <input type="text" name="name" value="{{ $user->name }}"
                    class="w-1/6 border-gray-700 border-2 pl-2 border-l-0">
                <input type="text" name="surname" value="{{ $user->surname }}"
                    class="w-1/6 border-gray-700 border-2 pl-2 border-l-0">
                <input type="email" name="email" value="{{ $user->email }}"
                    class="w-1/6 border-gray-700 border-2 pl-2 border-l-0">
                <select name="role" class="w-1/6 border-gray-700 border-2 pl-2 border-l-0">
                    @if ($user->role == 'default')
                        <option value="default">Default</option>
                        <option value="moderators">Moderators</option>
                    @else
                        <option value="moderators">Moderators</option>
                        <option value="default">Default</option>
                    @endif
                </select>
                <button type="submit" class="background-main text-xl py-3 font-semibold w-1/6">Save</button>
            </form>
        @endforeach
    </section>
@endsection
