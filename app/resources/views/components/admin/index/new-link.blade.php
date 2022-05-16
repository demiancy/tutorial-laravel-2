@props([
    'route' => '#',
    'text'  => __('new')
])

<a 
    href="{{ $route }}"
    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white first-letter:uppercase text-center"
>
    {{ $text }}
</a>