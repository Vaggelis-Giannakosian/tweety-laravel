@extends('layouts.app')

@section('content')

    <header class="relative mb-6">
        <img class="mb-4"
             src="{{ asset('images/profile_banner.png') }}"
             alt="Profile Banner"
        >


        <div class="flex justify-between items-center mb-4">

            <div>
                <h2 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-sm">
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 text-xs py-2 px-4 text-black mr-2">
                    Edit Profile
                </a>
                <a href="" class="bg-blue-500 rounded-full text-xs shadow py-2 px-4 text-white">
                    Edit Follow Me
                </a>
            </div>

        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem exercitationem in nam natus, nostrum porro quas soluta velit.
            Ab aliquam consequuntur dolor eaque eum facilis, fugiat ipsa laudantium maxime minus modi quisquam ratione rem,
            reprehenderit sed sit veniam voluptatem voluptates!
        </p>

        <img
            src="{{ $user->avatar }}"
            alt="User Avatar"
            class="rounded-full mr-2 absolute"
            style="width:150px;top:140px;left:calc(50% - 75px)"
        >


    </header>



    @include('_timeline',['tweets' => $user->tweets])

@endsection
