@extends('layout.app')
@section('title', __('auth/register.register'))
@section('content')


    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-rm-blue-dark px-6 py-8 rounded shadow-md text-rm-color w-full">
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <h1 class="mb-8 text-3xl text-center">{{ __('auth/login.login') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <x-jet-input id="email" placeholder="{{ __('auth/login.email') }}" class="block mt-1 w-full bg-rm-back" type="email" name="email" :value="old('email')" required />
                <x-jet-input id="password" placeholder="{{ __('auth/login.password') }}" class="block mt-1 w-full bg-rm-back" type="password" name="password" required autocomplete="current-password" />

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-rm-color">{{ __('auth/login.savelogin') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-rm-href hover:text-rm-href-hover" href="{{ route('password.request') }}">
                            {{ __('auth/login.password_request') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4 text-rm-color bg-rm-blue hover:text-rm-href-hover">
                        {{ __('auth/login.login_submit') }}
                    </x-jet-button>
                </div>
            </form>

        </div>
    </div>

@endsection
