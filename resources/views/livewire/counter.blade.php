<div wire:init="counter" class="max-w-sm rounded overflow-hidden shadow-lg bg-rm-blue-dark border-rm-blue">
    <img class="w-full" src="https://www.rmarchiv.de/games/1653/screenshot/show/{{ $picture }}" alt="Mountain">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Name: {{ $count }}</div>
        <p class="text-base">
            {{ $text }}
            <br>
            <button class="text-rm-href hover:text-rm-href-hover" wire:click="counter">+</button>
        </p>
    </div>
    <div class="px-6 pt-4 pb-2 mt-2">
        <span class="inline-block bg-rm-blue rounded-full px-3 py-1 text-sm font-semibold text-rm-href mr-2 mb-2">#test</span>
        <span class="inline-block bg-rm-blue rounded-full px-3 py-1 text-sm font-semibold text-rm-href mr-2 mb-2">#tags</span>
        <span class="inline-block bg-rm-blue rounded-full px-3 py-1 text-sm font-semibold text-rm-href mr-2 mb-2">#forthewin</span>
    </div>
</div>
