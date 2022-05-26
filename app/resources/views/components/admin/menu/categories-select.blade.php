@props([
    'categories' => [],
    'selected'   => []
])

@php
    $selected = collect(old('categories', []))->merge($selected);
@endphp

<x-admin.form.container-field 
    field="categories"
    :label="__('model.common.categories')"
>
    <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1" multiple>
        @foreach ($categories as $category)
            <x-admin.form.option
                :value="$category->id"
                :selected="$selected->contains($category->id)"
                :text="$category->name"
            />
        @endforeach
    </select>
</x-admin.form.field>