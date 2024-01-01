@props(['active'])

@php
$classes = ($active)
            ? 'group flex items-center rounded-lg p-2 text-primary hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'
            : 'group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
