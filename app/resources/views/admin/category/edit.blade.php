<x-layouts.admin>
    <x-admin.common.title :title="__('admin.category.edit.title', ['name' => $category->name])"/>

    <x-admin.form.container-form :action="route('admin.categories.update', array_merge($params, ['category' => $category->id]))">
        @method('PUT')
        <x-admin.form.input-field 
            field="name"
            :label="__('model.common.name')"
            :value="$category->name"
        />

        <x-admin.form.image-field 
            field="image"
            :label="__('model.common.image')"
            :value="$category->image"
        />

        <x-admin.form.textarea-field 
            field="description" 
            :label="__('model.common.description')"
            :value="$category->description"
        />

        <div class="mt-6 flex">
            <x-admin.form.back-link :route="route('admin.categories.index', $params)"/>
            <x-admin.form.submit/>
        </div>
    </x-admin.form.container-form>
</x-layouts.admin>