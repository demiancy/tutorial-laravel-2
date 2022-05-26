<x-layouts.admin>
    <x-admin.common.title :title="__('admin.table.edit.title', ['name' => $table->name])"/>

    <x-admin.form.container-form>
        <form method="POST" action="{{ route('admin.tables.update', $table->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-admin.form.input-field 
                field="name"
                :label="__('model.common.name')"
                :value="$table->name"
            />

            <x-admin.form.input-field 
                field="guest_number"
                :label="__('model.table.guest_number')"
                type="number"
                min="0" 
                max="10" 
                :value="$table->guest_number"
            />

            <x-admin.form.input-field 
                field="status"
                :label="__('model.table.status')"
                :value="$table->status"
            />

            <x-admin.form.input-field 
                field="location"
                :label="__('model.table.location')"
                :value="$table->location"
            />

            <div class="mt-6 flex">
                <x-admin.form.back-link :route="route('admin.tables.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>