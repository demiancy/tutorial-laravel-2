@props([
    'tables'   => [],
    'selected' => 0
])

@php
    $selected = old('table_id', $selected);
@endphp

<x-admin.form.container-field 
    field="table_id"
    :label="__('model.common.table')"
>
    <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
        @foreach ($tables as $table)
            <x-admin.form.option
                :value="$table->id"
                :selected="$selected == $table->id"
                text="{{ $table->name }} ({{$table->guest_number }} {{ __('model.reservation.guest_number') }})"
            />
        @endforeach
    </select>
</x-admin.form.field>