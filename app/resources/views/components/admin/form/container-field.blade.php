@props([
    'field' => 'field',
    'label' => 'label'
])

<div class="sm:col-span-6 mb-3">
    <label for="{{ $field }}" class="block text-sm font-medium text-gray-700 dark:text-neutral-50 first-letter:uppercase">
        {{ $label }}
    </label>

    <div class="mt-1">
        {{ $slot }}
    </div>
    
    @error($field)
        <div class="text-sm text-red-700 dark:text-red-400 dark:font-bold">{{ $message }}</div>
    @enderror
</div>