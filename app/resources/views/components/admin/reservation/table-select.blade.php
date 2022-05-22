@props([
    'tables'   => [],
    'selected' => 0
])

@php
    $selected = old('table_id', $selected);
@endphp

<select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
    @foreach ($tables as $table)
        <x-admin.form.option
            :value="$table->id"
            :selected="$selected == $table->id"
            text="{{ $table->name }} ({{$table->guest_number }} {{ __('guests') }})"
        />
    @endforeach
</select>