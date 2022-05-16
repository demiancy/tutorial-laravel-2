@props([
    'tables' => [],
])

<select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
    @foreach ($tables as $table)
        <option value="{{ $table->id }}">{{ $table->name }}
            ({{ $table->guest_number }} {{ __('guests') }})
        </option>
    @endforeach
</select>