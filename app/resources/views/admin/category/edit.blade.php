<x-layouts.admin>
    <x-admin.common.title title="Edit category {{ $category->name }}"/>

    <x-admin.form.container-form>
        <form method="POST" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-admin.form.container-field field="name">
                <x-admin.form.field 
                    field="name" 
                    :value="$category->name"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="image">
                <div class="my-2">
                    <x-admin.common.img 
                        :file="$category->image"
                        size="32"
                    />
                </div>
                <x-admin.form.field 
                    field="image" 
                    type="file"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="description">
                <textarea 
                    id="description" 
                    rows="3" 
                    name="description"
                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-700 @enderror"
                >{{ old('description', $category->description) }}</textarea>
            </x-admin.form.field>

            <div class="mt-6 flex">
                <x-admin.form.back-link :route="route('admin.categories.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>