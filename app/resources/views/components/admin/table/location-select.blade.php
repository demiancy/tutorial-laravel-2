@props([
    'locations' => [],
    'selected'  => null,
])

@php
    $selected = old('table_location_id', $selected);
@endphp

<x-admin.form.container-select 
    field="table_location_id"
    :label="__('model.table.location')"
>
    @foreach ($locations as $location)
        <x-admin.form.option
            :value="$location->id"
            :selected="$selected == $location->id"
            :text="$location->name"
        />
    @endforeach
</x-admin.form.select>