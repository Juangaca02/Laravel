@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500',
]) !!}>
