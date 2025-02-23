<x-guest-layout>
    <x-authentication-card class="bg-white shadow-lg rounded-lg border border-gray-200 p-8">
        <x-slot name="logo">
            <x-authentication-card-logo class="w-20 h-20 mx-auto" />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <x-label for="email" value="{{ __('Email') }}" class="text-lg text-gray-700 font-semibold" />
                <x-input id="email" class="block mt-1 w-full border-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4 mb-6">
                <x-label for="password" value="{{ __('Password') }}" class="text-lg text-gray-700 font-semibold" />
                <x-input id="password" class="block mt-1 w-full border-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4 mb-6">
                <label for="remember_me" class="flex items-center text-gray-600">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4 px-6 py-2 bg-indigo-600 text-white hover:bg-indigo-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
