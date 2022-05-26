<x-layouts.admin>
    <x-admin.common.title :title="__('admin.menu.create.title')"/>

    <x-admin.form.container-form>
        <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
            @csrf
            <x-admin.form.input-field 
                field="name"
                :label="__('model.common.name')"
            />

            <x-admin.form.input-field 
                field="price"
                :label="__('model.menu.price')"
                type="number"
                min="0.00" 
                max="100000.00" 
                step="0.01"
            />

            <x-admin.form.image-field 
                field="image"
                :label="__('model.common.image')"
            />

            <x-admin.form.textarea-field 
                field="description" 
                :label="__('model.common.description')"
            />

            <x-admin.menu.categories-select 
                :categories="$categories"
            />

            <div class="mt-6 flex">
                <x-admin.form.back-link :route="route('admin.menus.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>