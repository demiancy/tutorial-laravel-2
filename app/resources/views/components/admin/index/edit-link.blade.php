@props(['route'])

<a 
    href="{{ $route }}"
    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white"
>
    {{ __('edit') }}
</a>