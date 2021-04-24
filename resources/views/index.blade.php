@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-black-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 text-center text-xl">
                <h1 class="sm:text-white text-5xt uppercase font-bold text-shadow-md pb-10">
                    Do you have anything to discuss?
                </h1>
                <a href="/posts" class="text-center background-main sm:text-black py-2 px-8 font-bold text-xl rounded-3xl">
                    Explore
                </a>
            </div>
        </div>
    </div>
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
    <div
        class="flex flex-col md:flex-row justify-between items-center gap-10 w-4/5 mx-auto py-15 border-b border-black-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/49/laptop-336373_960_720.jpg" width="700" alt="">
        </div>
        <div class="flex flex-col justify-between items-start h-full m-auto sm:m-auto text-left md:w-1/2 block">
            <h2 class="text-4xl font-extrabold text-black-600">
                Struggling to be a better web dev?
            </h2>

            <p class="font-extrabold text-black-600 text-l py-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam saepe laboriosam voluptate ut, eligendi
                repellendus dolores doloribus laborum, nihil expedita vitae? Quaerat qui commodi deserunt error! Suscipit
                eius placeat recusandae at id incidunt,
            </p>

            <a href="/posts" class="text-center background-main sm:text-black py-2 px-8 font-bold text-xl rounded-3xl">
                Read more
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="pb-5 text-3xl">
            Black lives matter
        </h2>

        <span class="font-extrabold block text-2xl py1 pt-2">
            Be strong
        </span>
        <span class="font-extrabold block text-2xl py1 pt-2">
            Be brave
        </span>
        <span class="font-extrabold block text-2xl py1 pt-2">
            Be you
        </span>
    </div>

    <div class="text-center pt-15">
        <span class="font-extrabold uppercase text-4xl text-black-800">
            Posts
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-black-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, maxime
            natus
            numquam fuga quis pariatur quidem. Nulla voluptatum labore dolor?</p>
    </div>

    <div class="sm:grid grid-cold-2 w-4/5 m-auto pt-5">
        <div class="recent pb-10">
            <h2 class="text-2xl font-semibold">Recent posts</h2>
            <div class="posts flex flex-row justify-between xl:justify-start flex-wrap items-center xl:gap-10 xl:mt-10 ">
                <div
                    class="md:relative post md:overflow-hidden wrapper flex flex-col-reverse md:flex-row justify-between items-center sm:w-49 xl:w-30 mt-5 xl:mt-0 shadow-md">
                    <div class="data flex-col justify-between items-center md:items-start text-center md:text-left md:px-5">
                        <h1 class="title text-sm md:text-xl font-semibold text-black md:text-white py-4">Title 1</h1>
                        <p class="content text-sm md:text-lg overflow-hidden md:text-white h-14 md:h-24 mb-5">Lorem
                            ipsum dolor
                            sit amet
                            consectetur,
                            adipisicing
                            elit.
                            Repudiandae quo
                            sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                        <div class="mb-5 md:mb-8">
                            <a href="/post"
                                class="background-main rounded-3xl text-sm md:text-xl text-black md:text-white py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                    </div>
                    <div class="image md:absolute md:t-0 md:l-0 md:h-full md:w-full md:object-cover z--1">
                        <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                            class="md:h-full md:w-full md:object-cover" alt="">
                    </div>
                </div>
                <div
                    class="md:relative post md:overflow-hidden wrapper flex flex-col-reverse md:flex-row justify-between items-center sm:w-49 xl:w-30 mt-5 xl:mt-0 shadow-md">
                    <div class="data flex-col justify-between items-center md:items-start text-center md:text-left md:px-5">
                        <h1 class="title text-sm md:text-xl font-semibold text-black md:text-white py-4">Title 1</h1>
                        <p class="content text-sm md:text-lg overflow-hidden md:text-white h-14 md:h-24 mb-5">Lorem
                            ipsum dolor
                            sit amet
                            consectetur,
                            adipisicing
                            elit.
                            Repudiandae quo
                            sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                        <div class="mb-5 md:mb-8">
                            <a href="/post"
                                class="background-main rounded-3xl text-sm md:text-xl text-black md:text-white py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                    </div>
                    <div class="image md:absolute md:t-0 md:l-0 md:h-full md:w-full md:object-cover z--1">
                        <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                            class="md:h-full md:w-full md:object-cover" alt="">
                    </div>
                </div>
                <div
                    class="md:relative post md:overflow-hidden wrapper flex flex-col-reverse md:flex-row justify-between items-center sm:w-49 xl:w-30 mt-5 xl:mt-0 shadow-md">
                    <div class="data flex-col justify-between items-center md:items-start text-center md:text-left md:px-5">
                        <h1 class="title text-sm md:text-xl font-semibold text-black md:text-white py-4">Title 1</h1>
                        <p class="content text-sm md:text-lg overflow-hidden md:text-white h-14 md:h-24 mb-5">Lorem
                            ipsum dolor
                            sit amet
                            consectetur,
                            adipisicing
                            elit.
                            Repudiandae quo
                            sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                        <div class="mb-5 md:mb-8">
                            <a href="/post"
                                class="background-main rounded-3xl text-sm md:text-xl text-black md:text-white py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                    </div>
                    <div class="image md:absolute md:t-0 md:l-0 md:h-full md:w-full md:object-cover z--1">
                        <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                            class="md:h-full md:w-full md:object-cover" alt="">
                    </div>
                </div>
                <div
                    class="md:relative post md:overflow-hidden wrapper flex flex-col-reverse md:flex-row justify-between items-center sm:w-49 xl:w-30 mt-5 xl:mt-0 shadow-md">
                    <div class="data flex-col justify-between items-center md:items-start text-center md:text-left md:px-5">
                        <h1 class="title text-sm md:text-xl font-semibold text-black md:text-white py-4">Title 1</h1>
                        <p class="content text-sm md:text-lg overflow-hidden md:text-white h-14 md:h-24 mb-5">Lorem
                            ipsum dolor
                            sit amet
                            consectetur,
                            adipisicing
                            elit.
                            Repudiandae quo
                            sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                        <div class="mb-5 md:mb-8">
                            <a href="/post"
                                class="background-main rounded-3xl text-sm md:text-xl text-black md:text-white py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                    </div>
                    <div class="image md:absolute md:t-0 md:l-0 md:h-full md:w-full md:object-cover z--1">
                        <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                            class="md:h-full md:w-full md:object-cover" alt="">
                    </div>
                </div>
                <div
                    class="md:relative post md:overflow-hidden wrapper flex flex-col-reverse md:flex-row justify-between items-center sm:w-49 xl:w-30 mt-5 xl:mt-0 shadow-md">
                    <div class="data flex-col justify-between items-center md:items-start text-center md:text-left md:px-5">
                        <h1 class="title text-sm md:text-xl font-semibold text-black md:text-white py-4">Title 1</h1>
                        <p class="content text-sm md:text-lg overflow-hidden md:text-white h-14 md:h-24 mb-5">Lorem
                            ipsum dolor
                            sit amet
                            consectetur,
                            adipisicing
                            elit.
                            Repudiandae quo
                            sapiente omnis quisquam rerum quia aliquid minima non assumenda atque.</p>
                        <div class="mb-5 md:mb-8">
                            <a href="/post"
                                class="background-main rounded-3xl text-sm md:text-xl text-black md:text-white py-3 px-6 font-semibold">Show
                                more</a>
                        </div>
                    </div>
                    <div class="image md:absolute md:t-0 md:l-0 md:h-full md:w-full md:object-cover z--1">
                        <img src="https://cdn.pixabay.com/photo/2016/10/28/11/57/tic-tac-toe-1777859_960_720.jpg"
                            class="md:h-full md:w-full md:object-cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
