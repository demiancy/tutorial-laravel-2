@props([
    'tables'   => [],
    'selected' => 0
])

@php
    $selected = old('table_id', $selected);
@endphp

<x-admin.form.container-select 
    field="table_id"
    :label="__('model.common.table')"
>
    @foreach ($tables as $table)
        <x-admin.form.option
            :value="$table->id"
            :selected="$selected == $table->id"
            text="{{ $table->name }} ({{ $table->guest_number }} {{ __('model.reservation.guest_number') }}, {{ $table->location->name }})"
        />
    @endforeach
</x-admin.form.select>