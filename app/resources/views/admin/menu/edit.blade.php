<x-layouts.admin>
    <x-admin.common.title :title="__('admin.menu.edit.title', ['name' => $menu->name])"/>

    <x-admin.form.container-form>
        <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-admin.form.input-field 
                field="name"
                :label="__('model.common.name')"
                :value="$menu->name"
            />

            <x-admin.form.input-field 
                field="price"
                :label="__('model.menu.price')"
                type="number"
                min="0.00" 
                max="100000.00" 
                step="0.01"
                :value="$menu->price"
            />

            <x-admin.form.image-field 
                field="image"
                :label="__('model.common.image')"
                :value="$menu->image"
            />

            <x-admin.form.textarea-field 
                field="description" 
                :label="__('model.common.description')"
                :value="$menu->description"
            />

            <x-admin.menu.categories-select 
                :categories="$categories"
                :selected="$menu->categories()->pluck('id')"
            />

            <div class="mt-6 flex">
                <x-admin.form.back-link :route="route('admin.menus.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>