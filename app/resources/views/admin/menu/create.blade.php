<x-layouts.admin>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 mt-10">
                    <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
                        @csrf
                        <x-admin.form.container-field field="name">
                            <x-admin.form.field field="name"/>
                        </x-admin.form.field>
  
                        <x-admin.form.container-field field="price">
                            <x-admin.form.field 
                                field="price" 
                                type="number"
                                min="0.00" 
                                max="10000.00" 
                                step="0.01"
                            />
                        </x-admin.form.field>

                        <x-admin.form.container-field field="image">
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
                                class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-400 @enderror">
                            </textarea>
                        </x-admin.form.field>

                        <div class="mt-6 p-4 flex">
                            <x-admin.form.back-link :route="route('admin.menus.index')"/>
                            <x-admin.form.submit/>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-layouts.admin>