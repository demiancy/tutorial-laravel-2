<x-layouts.admin>
    <x-admin.common.title :title="__('admin.user.create.title')"/>
    
    <x-admin.form.container-form :action="route('admin.users.store', $params)">
        <x-admin.form.input-field 
            field="name"
            :label="__('model.common.name')"
        />

        <x-admin.form.input-field 
            field="email"
            :label="__('model.common.email')"
            type="email"
        />

        <x-admin.form.input-field 
            field="password"
            :label="__('model.user.password')"
            type="password"
        />

        <x-admin.form.input-field 
            field="password_confirmation"
            :label="__('model.user.password_confirmation')"
            type="password"
        />

        <x-admin.user.roles-select 
            :roles="$roles"
        />

        <div class="mt-6 flex">
            <x-admin.form.back-link :route="route('admin.users.index', $params)"/>
            <x-admin.form.submit/>
        </div>
    </x-admin.form.container-form>
</x-layouts.admin>