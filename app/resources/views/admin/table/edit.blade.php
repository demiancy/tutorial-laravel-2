<x-layouts.admin>
    <div class="p-4 bg-slate-100 rounded">
        <div class="space-y-8 divide-y divide-gray-200 mt-10">
            <form method="POST" action="{{ route('admin.tables.update', $table->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-admin.form.container-field field="name">
                    <x-admin.form.field 
                        field="name" 
                        :value="$table->name"
                    />
                </x-admin.form.field>

                <x-admin.form.container-field field="guest_number">
                    <x-admin.form.field 
                        field="guest_number" 
                        type="number"
                        min="0" 
                        max="10" 
                        :value="$table->guest_number"
                    />
                </x-admin.form.field>

                <x-admin.form.container-field field="status">
                    <x-admin.form.field 
                        field="status" 
                        :value="$table->status"
                    />
                </x-admin.form.field>

                <x-admin.form.container-field field="location">
                    <x-admin.form.field 
                        field="location" 
                        :value="$table->location"
                    />
                </x-admin.form.field>

                <div class="mt-6 p-4 flex">
                    <x-admin.form.back-link :route="route('admin.tables.index')"/>
                    <x-admin.form.submit/>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>