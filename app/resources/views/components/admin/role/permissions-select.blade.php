@props([
    'permissions' => [],
    'selected'    => []
])

@php
    $selected = collect(old('permissions', []))->merge($selected);
@endphp

<x-admin.form.container-select 
    field="permissions"
    :label="__('model.role.permissions')"
    multiple="true"
>
    @foreach ($permissions as $permission)
        <x-admin.form.option
            :value="$permission->id"
            :selected="$selected->contains($permission->id)"
            :text="__('permissions.'.$permission->name)"
        />
    @endforeach
</x-admin.form.select>