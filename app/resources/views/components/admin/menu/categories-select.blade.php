@props([
    'categories' => [],
    'selected'   => []
])

@php
    $selected   = collect(old('categories', []))->merge($selected);
    $errorClass = $errors->has('categories') ? 'border-red-700 dark:border-red-400' : 'border-gray-400 dark:border-zinc-800';
@endphp

<x-admin.form.container-field 
    field="categories"
    :label="__('model.common.categories')"
>
    <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1 bg-white dark:bg-gray-700 dark:focus:border-indigo-600 focus:ring-0 text-base dark:text-white rounded-md {{ $errorClass }}" multiple>
        @foreach ($categories as $category)
            <x-admin.form.option
                :value="$category->id"
                :selected="$selected->contains($category->id)"
                :text="$category->name"
            />
        @endforeach
    </select>
</x-admin.form.field>