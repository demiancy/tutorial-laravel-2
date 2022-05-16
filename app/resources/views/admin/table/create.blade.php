<x-layouts.admin>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 mt-10">
                    <form method="POST" action="{{ route('admin.tables.store') }}" enctype="multipart/form-data">
                        @csrf
                        <x-admin.form.container-field field="name">
                            <x-admin.form.field field="name"/>
                        </x-admin.form.field>

                        <x-admin.form.container-field field="guest_number">
                            <x-admin.form.field 
                                field="guest_number" 
                                type="number"
                                min="0" 
                                max="10" 
                            />
                        </x-admin.form.field>

                        <x-admin.form.container-field field="status">
                            <x-admin.form.field field="status"/>
                        </x-admin.form.field>

                        <x-admin.form.container-field field="location">
                            <x-admin.form.field field="location"/>
                        </x-admin.form.field>
  
                        <div class="mt-6 p-4 flex">
                            <x-admin.form.back-link :route="route('admin.tables.index')"/>
                            <x-admin.form.submit/>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-layouts.admin>