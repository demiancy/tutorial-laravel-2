<x-layouts.admin>
    <x-admin.common.title :title="__('admin.category.create.title')"/>
    
    <x-admin.form.container-form>
        <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
            @csrf
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
                <x-admin.form.back-link :route="route('admin.categories.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>