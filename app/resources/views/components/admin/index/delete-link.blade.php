@props([
    'route' => '#',
    'text'  => __('admin.common.delete')
])

<form
    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white w-100 text-center"
    method="POST"
    action="{{ $route }}"
    onsubmit="return confirm('{{ __('admin.common.confirm.delete') }}');"
>
    @csrf
    @method('DELETE')
    <button type="submit">
        {{ $text }}
    </button>
</form>