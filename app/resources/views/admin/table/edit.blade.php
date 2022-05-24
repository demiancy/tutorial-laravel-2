<x-layouts.admin>
    <x-admin.common.title title="Edit table {{ $table->name }}"/>

    <x-admin.form.container-form>
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

            <div class="mt-6 flex">
                <x-admin.form.back-link :route="route('admin.tables.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>