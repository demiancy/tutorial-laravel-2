<x-layouts.admin>
    <x-admin.common.title :title="__('admin.role.edit.title', ['name' => $role->name])"/>

    <x-admin.form.container-form :action="route('admin.roles.update', array_merge($params, ['role' => $role->id]))">
        @method('PUT')
        <x-admin.form.input-field 
            field="name"
            :label="__('model.common.name')"
            :value="$role->name"
        />

        <x-admin.role.permissions-select 
            :permissions="$permissions"
            :selected="$role->permissions()->pluck('id')"
        />

        <div class="mt-6 flex">
            <x-admin.form.back-link :route="route('admin.roles.index', $params)"/>
            <x-admin.form.submit/>
        </div>
    </x-admin.form.container-form>
</x-layouts.admin>