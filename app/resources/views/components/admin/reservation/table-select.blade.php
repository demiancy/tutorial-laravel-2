@props([
    'tables'   => [],
    'selected' => 0
])

@php
    $selected   = old('table_id', $selected);
    $errorClass = $errors->has('table_id') ? 'border-red-700 dark:border-red-400' : 'border-gray-400 dark:border-zinc-800';
@endphp

<x-admin.form.container-field 
    field="table_id"
    :label="__('model.common.table')"
>
    <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1 focus:ring-0 bg-white dark:focus:border-indigo-600 dark:bg-gray-700 text-base dark:text-white rounded-md {{ $errorClass }}">
        @foreach ($tables as $table)
            <x-admin.form.option
                :value="$table->id"
                :selected="$selected == $table->id"
                text="{{ $table->name }} ({{ $table->guest_number }} {{ __('model.reservation.guest_number') }}, {{ $table->location->name }})"
            />
        @endforeach
    </select>
</x-admin.form.field>