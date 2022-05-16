@props([
    'route' => '#',
    'text'  => __('back')
])

<a 
    href="{{ $route }}"
    class="px-4 py-2 mr-4 bg-cyan-500 hover:bg-cyan-700 rounded-lg text-white first-letter:uppercase text-center"
>
    {{ $text }}
</a>