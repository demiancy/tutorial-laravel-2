@props([
    'statuses' => [],
    'selected' => null,
])

@php
    $selected   = old('status', $selected);
    $errorClass = $errors->has('status') ? 'border-red-700 dark:border-red-400' : 'border-gray-400 dark:border-zinc-800';
@endphp

<x-admin.form.container-field 
    field="status"
    :label="__('model.table.status')"
>
    <select id="status" name="status" class="form-multiselect block w-full mt-1 focus:ring-0 bg-white dark:focus:border-indigo-600 dark:bg-gray-700 text-base dark:text-white rounded-md {{ $errorClass }}">
        @foreach ($statuses as $status)
            <x-admin.form.option
                :value="$status->value"
                :selected="$selected == $status->value"
                :text="$status->description"
            />
        @endforeach
    </select>
</x-admin.form.field>