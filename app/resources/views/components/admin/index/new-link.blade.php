@props([
    'route' => '#',
    'text'  => __('admin.common.new')
])

<a 
    href="{{ $route }}"
    class="px-4 py-2 bg-indigo-500 dark:bg-indigo-600 hover:bg-indigo-700 dark:hover:bg-indigo-800 rounded-lg text-white first-letter:uppercase text-center w-full md:w-auto"
>
    <i class="fa-solid fa-plus text-sm"></i> {{ $text }}
</a>