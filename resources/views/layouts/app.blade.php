<!doctype html>
<html lang="de" class="text-rm-color">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-rm-back text-rm-color">
        <!-- Header -->
        <livewire:random-header />
        <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32 pt-32">
            <div class="mx-0 sm:mx-6">
                @include('_partials.topnav')
                <div class="w-full text-xl md:text-2xl leading-normal rounded-t pt-4">
                    @yield('content')
                </div>
            </div>
        </div>


        @livewireScripts
    </body>
</html>
