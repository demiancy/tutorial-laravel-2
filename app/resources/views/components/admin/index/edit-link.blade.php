@props([
    'route' => '#',
    'text'  => __('admin.common.edit')
])

<a 
    href="{{ $route }}"
    class="px-4 py-2 bg-green-500 dark:bg-amber-700 hover:bg-green-700 dark:hover:bg-amber-900 rounded-lg text-white first-letter:uppercase text-center w-100"
>
    <i class="fa-solid fa-pen text-xs"></i> {{ $text }}
</a>