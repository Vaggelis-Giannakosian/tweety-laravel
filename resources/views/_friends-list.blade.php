<h3 class="font-bold text-xl mb-4">
   Following
</h3>

<ul>
    @foreach(auth()->user()->follows as $user)

    <li class="mb-4">
        <div>
            <a  class="flex items-center text-sm"  href="{{ route('profile',$user) }}">
                <img
                    src={{ $user->avatar }}
                        alt=""
                    class="rounded-full mr-2"
                    width="40px"
                    height="40px"
                >

                {{ $user->name }}
            </a>

        </div>
    </li>

    @endforeach
</ul>
