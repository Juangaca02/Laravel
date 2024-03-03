@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-dorado']) }}>
    {{ $value ?? $slot }}
</label>
