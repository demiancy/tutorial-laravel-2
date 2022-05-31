<x-layouts.admin>
    <x-admin.common.title :title="__('admin.category.create.title')"/>
    
    <x-admin.form.container-form :action="route('admin.categories.store', $params)">
        <x-admin.form.input-field 
            field="name"
            :label="__('model.common.name')"
        />
        
        <x-admin.form.input-field 
            field="image" 
            type="file"
            :label="__('model.common.image')"
        />

        <x-admin.form.textarea-field 
            field="description" 
            :label="__('model.common.description')"
        />

        <div class="mt-6 flex">
            <x-admin.form.back-link :route="route('admin.categories.index', $params)"/>
            <x-admin.form.submit/>
        </div>
    </x-admin.form.container-form>
</x-layouts.admin>