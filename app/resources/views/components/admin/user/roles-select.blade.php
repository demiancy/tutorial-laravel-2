@props([
    'roles'    => [],
    'selected' => []
])

@php
    $selected = collect(old('roles', []))->merge($selected);
@endphp

<x-admin.form.container-select 
    field="roles"
    :label="__('model.user.roles')"
    multiple="true"
>
    @foreach ($roles as $role)
        <x-admin.form.option
            :value="$role->id"
            :selected="$selected->contains($role->id)"
            :text="$role->name"
        />
    @endforeach
</x-admin.form.select>