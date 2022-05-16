@props([
    'route' => '#',
    'text'  => __('Delete')
])

<form
    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
    method="POST"
    action="{{ $route }}"
    onsubmit="return confirm('{{ __('Are you sure?') }}');"
>
    @csrf
    @method('DELETE')
    <button type="submit">
        {{ $text }}
    </button>
</form>