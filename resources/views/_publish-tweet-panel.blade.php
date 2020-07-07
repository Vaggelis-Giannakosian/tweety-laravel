<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">

    <form method="POST" action="{{ route('create.tweet') }}">
        @csrf
    <textarea
        name="body"
        class="w-full"
        placeholder="What's up doc?"
        required
    ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">

            <img
                src="{{ auth()->user()->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="50px"
                height="50px"
            >

            <button
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white"
            >
                Tweet-a-roo!
            </button>

        </footer>

    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror

</div>
