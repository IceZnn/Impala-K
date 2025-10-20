@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-dark-700 dark:text-dark-300']) }}>
    {{ $value ?? $slot }}
</label>
