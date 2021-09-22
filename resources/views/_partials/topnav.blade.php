<!--Nav-->
<nav class="mt-0 w-full bg-rm-blue-dark">
    <div class="container mx-auto flex items-center">

        <div class="flex w-1/2 pl-4 text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block py-2 px-2 text-rm-href no-underline hover:text-rm-href-hover" href="/">{{ __('_partials/topnav.home') }}</a>
                </li>
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2" href="/">{{ __('_partials/topnav.games') }}</a>
                </li>
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2" href="/">{{ __('_partials/topnav.developers') }}</a>
                </li>
                <li class="mr-2 hover:bg-rm-blue">
                    <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2" href="/">{{ __('_partials/topnav.resources') }}</a>
                </li>
            </ul>
        </div>
        
        <div class="flex w-1/2 justify-end content-center">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                @if (Route::has('login'))
                    @auth
                        <li class="mr-2 hover:bg-rm-blue">
                            <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2" href="{{ route('logout') }}">{{ Auth::user()->name }}</a>
                        </li>
                    @else
                        <li class="mr-2 hover:bg-rm-blue">
                            <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2" href="{{ route('register') }}">{{ __('_partials/topnav.register') }}</a>
                        </li>
                        <li class="mr-2 hover:bg-rm-blue">
                            <a class="inline-block text-rm-href no-underline hover:text-rm-href-hover py-2 px-2" href="{{ route('login') }}">{{ __('_partials/topnav.login') }}</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>

    </div>
</nav>
