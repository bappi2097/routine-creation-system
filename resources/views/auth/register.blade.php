@extends('layouts.app')

@section('content')
<div class="mt-12 container mx-auto flex justify-center">
    <div class="px-16 py-6 bg-white rounded-lg border border-gray-300">
        <div class="col-md-8">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>

                    <input class="border border-gray-400 px-4 py-2 w-full" type="text" name="name" id="name"
                        placeholder="John Doe" required autocomplete="name" autofocus>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="email">
                        email
                    </label>

                    <input class="border border-gray-400 px-4 py-2 w-full" type="email" name="email" id="email"
                        placeholder="john.doe@example.com" required autocomplete="email" autofocus>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>

                    <input class="border border-gray-400 px-4 py-2 w-full" type="password" name="password" id="password"
                        placeholder="***********" required autocomplete="new-password" autofocus>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block mb-1 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                        Password Confirmation
                    </label>

                    <input class="border border-gray-400 px-4 py-2 w-full" type="password" name="password_confirmation"
                        id="password_confirmation" placeholder="***********" required autocomplete="new-password"
                        autofocus>
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection