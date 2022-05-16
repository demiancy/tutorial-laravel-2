@props([
    'field' => 'field',
])

@php
    $label = str_replace(
        ['_id', '_'], 
        ['', ' '], 
        $field
    );
@endphp

<div class="sm:col-span-6 mb-3">
    <label for="{{ $field }}" class="block text-sm font-medium text-gray-700 first-letter:uppercase">{{ __($label) }}</label>
    <div class="mt-1">
        {{ $slot }}
    </div>
    @error($field)
        <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>