@props([
    'field' => 'field',
    'value' => '',
    'label' => 'label'
])

@php
    $errorClass = $errors->has($field) ? 'border-red-700' : '';
@endphp

<x-admin.form.container-field 
    :field="$field"
    :label="$label"
>
    <textarea 
        {!! $attributes->merge(['class' => "shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md $errorClass", 'rows' => "3"]) !!} 
        id="{{ $field }}" 
        name="{{ $field }}" 
    >{{ old($field, $value) }}</textarea>
</x-admin.form.field>