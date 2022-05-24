<x-layouts.admin>
    <x-admin.common.title title="New reservation"/>

    <div class="p-4 bg-slate-100 rounded">
        <div class="space-y-8 divide-y divide-gray-200 mt-10">
            <form method="POST" action="{{ route('admin.reservations.store') }}" enctype="multipart/form-data">
                @csrf
                <x-admin.form.container-field field="first_name">
                    <x-admin.form.field field="first_name"/>
                </x-admin.form.field>

                <x-admin.form.container-field field="last_name">
                    <x-admin.form.field field="last_name"/>
                </x-admin.form.field>

                <x-admin.form.container-field field="email">
                    <x-admin.form.field 
                        field="email" 
                        type="email"
                    />
                </x-admin.form.field>

                <x-admin.form.container-field field="date">
                    <x-admin.form.field 
                        field="date" 
                        type="datetime-local"
                    />
                </x-admin.form.field>

                <x-admin.form.container-field field="phone">
                    <x-admin.form.field field="phone"/>
                </x-admin.form.field>

                <x-admin.form.container-field field="guest_number">
                    <x-admin.form.field 
                        field="guest_number" 
                        type="number"
                        min="0" 
                        max="10" 
                    />
                </x-admin.form.field>

                <x-admin.form.container-field field="table_id">
                    <x-admin.reservation.table-select :tables="$tables"/>
                </x-admin.form.field>

                <div class="mt-6 p-4 flex">
                    <x-admin.form.back-link :route="route('admin.reservations.index')"/>
                    <x-admin.form.submit/>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>