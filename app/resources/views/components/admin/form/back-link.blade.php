@props([
    'route' => '#',
    'text'  => __('back')
])

<a 
    href="{{ $route }}"
    class="px-4 py-2 mr-4 bg-cyan-500 dark:bg-blue-700 hover:bg-cyan-700 dark:hover:bg-blue-900 rounded-lg text-white first-letter:uppercase text-center w-full md:w-auto"
>
    <i class="fa-solid fa-reply text-xs"></i> {{ $text }}
</a>