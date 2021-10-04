<div wire:init="random_header" class="w-full m-0 p-0 bg-cover bg-bottom">
    <div class="container max-w-4xl mx-auto text-center break-normal">
        <!--Title-->
            @if($user)
                <a href="{{ url('/') }}">
                    <img class="object-scale-down h-32 w-full" src="{{ asset("/storage/".$logo->filepath) }}" alt="Logo: {{ $logo->title }}">
                </a>
                <p class="text-rm-color">Logo '{{ $logo->title }}' by {{ $user->name }} :: {{ config('app.name') }} is brought to you with love.</p>
            @endif
    </div>
</div>
