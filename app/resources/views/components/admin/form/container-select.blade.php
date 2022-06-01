@props([
    'field'    => 'field',
    'label'    => 'label',
    'multiple' => false
])

@php
    $errorClass = $errors->has($field) ? 'border-red-700 dark:border-red-400' : 'border-gray-400 dark:border-zinc-800';
    $name       = $field.($multiple ? '[]' : '')
@endphp

<x-admin.form.container-field 
    :field="$field"
    :label="$label"
>
    <select 
        id="{{ $field }}" 
        name="{{ $name }}" 
        class="form-multiselect block w-full mt-1 focus:ring-0 bg-white dark:focus:border-indigo-600 dark:bg-gray-700 text-base dark:text-white rounded-md {{ $errorClass }}"
        {{ $multiple ? 'multiple' : '' }}
    >
        {{ $slot }}
    </select>
</x-admin.form.field>