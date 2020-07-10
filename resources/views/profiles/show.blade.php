
<x-app>


    <header class="relative mb-6">

        <div class="relative">
            <img class="mb-4"
                 src="{{ asset('images/profile_banner.png') }}"
                 alt="Profile Banner"
            >
            <img
                src="{{ $user->avatar }}"
                alt="User Avatar"
                class="rounded-full mr-2 absolute bottom-0"
                width="150"
                style="left:50%; transform: translate(-50%,50%)"
            >
        </div>

        <div class="flex justify-between items-center mb-6">

            <div>
                <h2 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-sm">
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>

            <div class="flex">

                @can('update',$user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 text-xs py-2 px-4 text-black mr-2">
                        Edit Profile
                    </a>
                @endcan


                <x-follow-button :user="$user"></x-follow-button>

            </div>

        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem exercitationem in nam natus, nostrum porro
            quas soluta velit.
            Ab aliquam consequuntur dolor eaque eum facilis, fugiat ipsa laudantium maxime minus modi quisquam ratione
            rem,
            reprehenderit sed sit veniam voluptatem voluptates!
        </p>


    </header>



    @include('_timeline',['tweets' => $tweets])


</x-app>
