@props([
    'statuses' => [],
    'selected' => null,
])

@php
    $selected = old('status', $selected);
@endphp

<x-admin.form.container-select 
    field="status"
    :label="__('model.table.status')"
>
    @foreach ($statuses as $status)
        <x-admin.form.option
            :value="$status->value"
            :selected="$selected == $status->value"
            :text="$status->description"
        />
    @endforeach
</x-admin.form.select>