@extends('layouts.app')
@section('title', __('auth/register.register'))
@section('content')


    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-rm-blue-dark px-6 py-8 rounded shadow-md text-rm-color w-full">
            <h1 class="mb-8 text-3xl text-center">{{ __('auth/register.register') }}</h1>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <x-jet-input id="name" placeholder="{{ __('auth/register.name') }}" class="block mt-1 w-full bg-rm-back" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-jet-input id="email" placeholder="{{ __('auth/register.email') }}" class="block mt-1 w-full bg-rm-back" type="email" name="email" :value="old('email')" required />
                <x-jet-input id="password" placeholder="{{ __('auth/register.password') }}" class="block mt-1 w-full bg-rm-back" type="password" name="password" required autocomplete="new-password" />
                <x-jet-input id="password_confirmation" placeholder="{{ __('auth/register.password_confirm') }}" class="block mt-1 w-full bg-rm-back" type="password" name="password_confirmation" required autocomplete="new-password" />

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2 text-rm-color">
                                    {!! __('auth/register.agree') !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-rm-href hover:text-rm-href-hover" href="{{ route('login') }}">
                        {{ __('auth/register.already_registered') }}
                    </a>

                    <x-jet-button class="ml-4 text-rm-color bg-rm-blue hover:text-rm-href-hover">
                        {{ __('auth/register.register_submit') }}
                    </x-jet-button>
                </div>
            </form>

        </div>
    </div>


@endsection
