@props([
    'categories' => [],
    'selected'   => []
])

@php
    $selected = collect(old('categories', []))->merge($selected);
@endphp

<x-admin.form.container-select 
    field="categories"
    :label="__('model.common.categories')"
    multiple="true"
>
    @foreach ($categories as $category)
        <x-admin.form.option
            :value="$category->id"
            :selected="$selected->contains($category->id)"
            :text="$category->name"
        />
    @endforeach
</x-admin.form.select>