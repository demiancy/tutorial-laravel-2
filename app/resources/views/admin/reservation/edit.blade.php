<x-layouts.admin>
    <x-admin.common.title title="Edit reservation nro {{ $reservation->id }}"/>

    <x-admin.form.container-form>
        <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-admin.form.container-field field="first_name">
                <x-admin.form.field 
                    field="first_name"
                    :value="$reservation->first_name"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="last_name">
                <x-admin.form.field 
                    field="last_name"
                    :value="$reservation->last_name"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="email">
                <x-admin.form.field 
                    field="email" 
                    type="email"
                    :value="$reservation->email"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="date">
                <x-admin.form.field 
                    field="date" 
                    type="datetime-local"
                    :value="$reservation->date"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="phone">
                <x-admin.form.field 
                    field="phone"
                    :value="$reservation->phone"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="guest_number">
                <x-admin.form.field 
                    field="guest_number" 
                    type="number"
                    min="0" 
                    max="10" 
                    :value="$reservation->guest_number"
                />
            </x-admin.form.field>

            <x-admin.form.container-field field="table_id">
                <x-admin.reservation.table-select 
                    :tables="$tables"
                    :selected="$reservation->table->id"
                />
            </x-admin.form.field>

            <div class="mt-6 flex">
                <x-admin.form.back-link :route="route('admin.reservations.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>