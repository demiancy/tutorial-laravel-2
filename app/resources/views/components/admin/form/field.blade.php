@props([
    'field' => 'field',
    'type'  => 'text'
])

<input 
    {!! $attributes !!}
    type="{{ $type }}" 
    id="{{ $field }}" 
    name="{{ $field }}"
    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error($field) border-red-400 @enderror" 
/>

