<form method="POST" action="{{ route('follow',[$user]) }}">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full text-xs shadow py-2 px-4 text-white">
        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>
