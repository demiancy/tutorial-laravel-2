@props([
    'route' => '#',
    'text'  => __('edit')
])

<a 
    href="{{ $route }}"
    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white first-letter:uppercase"
>
    {{ $text }}
</a>