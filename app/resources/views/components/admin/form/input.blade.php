@props([
    'field' => 'field',
    'type'  => 'text',
    'value' => '',
])

@php
    $errorClass = $errors->has($field) ? 'border-red-700 dark:border-red-400' : 'border-gray-400 dark:border-zinc-800';
@endphp

<input 
    {!! $attributes->merge(['class' => "block w-full appearance-none bg-white border dark:focus:border-indigo-600 dark:focus:ring-0 dark:bg-gray-700 rounded-md py-2 px-3 text-base dark:text-white leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 $errorClass"]) !!}
    type="{{ $type }}" 
    id="{{ $field }}" 
    name="{{ $field }}" 
    value="{{ old($field, $value) }}"
/>
