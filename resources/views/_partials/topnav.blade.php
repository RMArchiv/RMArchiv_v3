<!--Nav-->
<nav class="mt-0 w-full bg-rm-blue-dark">
    <div class="container mx-auto flex items-center">

        <div class="flex w-1/2 pl-4 text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block py-2 px-2 text-rm-href no-underline hover:text-rm-href-hover"
                       href="/">{{ __('_partials/topnav.home') }}</a>
                </li>
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2"
                       href="/">{{ __('_partials/topnav.games') }}</a>
                </li>
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2"
                       href="/">{{ __('_partials/topnav.developers') }}</a>
                </li>
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2"
                       href="/">{{ __('_partials/topnav.resources') }}</a>
                </li>
            </ul>
        </div>

        <div class="flex w-1/2 justify-end content-center text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
            @if (Route::has('login'))
                @auth
                    <!-- Settings Dropdown -->
                        <div class="ml-3 relative">
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                 src="{{ Auth::user()->profile_photo_url }}"
                                                 alt="{{ Auth::user()->name }}"/>
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium text-rm-href bg-rm-blue-dark hover:bg-rm-blue hover:text-rm-href-hover focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-rm-color">
                                        {{ __('_partials/topnav.manage_account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('_partials/topnav.profile') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif

                                    <div class="border-t border-rm-blue"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('_partials/topnav.logout') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    @else
                        <li class="mr-2 hover:bg-rm-blue">
                            <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2"
                               href="{{ route('register') }}">{{ __('_partials/topnav.register') }}</a>
                        </li>
                        <li class="mr-2 hover:bg-rm-blue">
                            <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2"
                               href="{{ route('login') }}">{{ __('_partials/topnav.login') }}</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>

    </div>
</nav>
