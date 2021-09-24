@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-rm-color']) }}>
    {{ $value ?? $slot }}
</label>
