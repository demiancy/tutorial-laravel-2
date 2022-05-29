@props([
    'field' => 'field',
    'value' => '',
    'label' => 'label'
])

@php
    $errorClass = $errors->has($field) ? 'border-red-700 dark:border-red-400' : 'border-gray-400 dark:border-zinc-800';
@endphp

<x-admin.form.container-field 
    :field="$field"
    :label="$label"
>
    <textarea 
        {!! $attributes->merge(['class' => "shadow-sm appearance-none bg-white dark:bg-gray-700 py-2 px-3 text-base dark:text-white leading-normal transition duration-150 ease-in-out block w-full sm:text-sm border dark:focus:border-indigo-600 dark:focus:ring-0 rounded-md $errorClass", 'rows' => "3"]) !!} 
        id="{{ $field }}" 
        name="{{ $field }}" 
    >{{ old($field, $value) }}</textarea>
</x-admin.form.field>