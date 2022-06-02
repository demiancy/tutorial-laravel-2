@props(['active'])

@php
$classes = 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline';

$classes .= ($active ?? false)
            ? 'bg-gray-200 dark:bg-gray-700'
            : 'bg-transparent dark:bg-transparent';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
