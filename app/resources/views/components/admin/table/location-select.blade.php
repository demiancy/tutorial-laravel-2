@props([
    'locations' => [],
    'selected'  => null,
])

@php
    $selected   = old('table_location_id', $selected);
    $errorClass = $errors->has('table_location_id') ? 'border-red-700 dark:border-red-400' : 'border-gray-400 dark:border-zinc-800';
@endphp

<x-admin.form.container-field 
    field="table_location_id"
    :label="__('model.table.location')"
>
    <select id="table_location_id" name="table_location_id" class="form-multiselect block w-full mt-1 focus:ring-0 bg-white dark:focus:border-indigo-600 dark:bg-gray-700 text-base dark:text-white rounded-md {{ $errorClass }}">
        @foreach ($locations as $location)
            <x-admin.form.option
                :value="$location->id"
                :selected="$selected == $location->id"
                :text="$location->name"
            />
        @endforeach
    </select>
</x-admin.form.field>