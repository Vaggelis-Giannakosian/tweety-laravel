<ul>
    <li><a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">
            Home
        </a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/explore">
            Explore
        </a></li>
    <li><a class="font-bold text-lg mb-4 block" href="{{ route('profile',auth()->user()) }}">
            Profile
        </a></li>
    <li>  <form id="logoutForm" method="POST" action="{{ route('logout')}}">
            @csrf
            <button type="submit" class="font-bold text-lg mb-4 block">Logout</button>
        </form>
    </li>

</ul>
