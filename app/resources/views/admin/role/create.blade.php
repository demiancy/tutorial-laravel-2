<x-layouts.admin>
    <x-admin.common.title :title="__('admin.role.create.title')"/>
    
    <x-admin.form.container-form :action="route('admin.roles.store', $params)">
        <x-admin.form.input-field 
            field="name"
            :label="__('model.common.name')"
        />

        <x-admin.role.permissions-select 
            :permissions="$permissions"
        />

        <div class="mt-6 flex">
            <x-admin.form.back-link :route="route('admin.roles.index', $params)"/>
            <x-admin.form.submit/>
        </div>
    </x-admin.form.container-form>
</x-layouts.admin>