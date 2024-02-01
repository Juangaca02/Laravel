<div>
    <div class="p-4 mb-4 text-sm text-{{ $colortext }}-800 rounded-lg bg-{{ $backgroundcolor }}-300 dark:bg-{{ $backgroundcolor }}-800 dark:text-{{ $colortext }}-400"
        role="alert">
        <span class="font-medium">{{ $slot }}</span>{{ $texto }}{{ $texto1 }}
        {{ $peligro() }}
        <p {{ $attributes }}>Texto de algo, ns</p>
    </div>
</div>
