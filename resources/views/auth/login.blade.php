<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-6 py-4 bg-gray-400 rounded-lg">
            <div class="col-md-8">

                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf


                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Email
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="email"
                               name="email"
                               id="email"
                               value="{{ old('email') }}"
                               required>

                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Password
                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="password"
                               name="password"
                               id="password"
                               autocomplete="current-password"
                               required>

                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <div>

                            <input type="checkbox" name="remember" id="remember" class="mr-1">

                            <label for="remember"
                                   {{ old('remember') ? 'checked' : '' }}
                                   class="text-xs text-gray-700 font-bold uppercase">
                                Remember Me
                            </label>
                        </div>

                        @error('remember')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>

                        <a href="{{ route('password.request') }}">Forgot your Password?</a>
                    </div>



                </form>
            </div>
        </div>
    </div>
</x-master>
