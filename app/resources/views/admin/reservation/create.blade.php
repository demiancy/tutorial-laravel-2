<x-layouts.admin>
    <x-admin.common.title :title="__('admin.reservation.create.title')"/>

    <x-admin.form.container-form>
        <form method="POST" action="{{ route('admin.reservations.store') }}" enctype="multipart/form-data">
            @csrf
            <x-admin.form.input-field 
                field="first_name"
                :label="__('model.reservation.first_name')"
            />

            <x-admin.form.input-field 
                field="last_name"
                :label="__('model.reservation.last_name')"
            />

            <x-admin.form.input-field 
                field="email"
                :label="__('model.reservation.email')"
            />

            <x-admin.form.input-field 
                field="date" 
                type="datetime-local"
                :label="__('model.reservation.date')"
            />

            <x-admin.form.input-field 
                field="phone"
                :label="__('model.reservation.phone')"
            />

            <x-admin.form.input-field 
                field="guest_number"
                :label="__('model.reservation.guest_number')"
                type="number"
                min="0" 
                max="10" 
            />

            <x-admin.reservation.table-select 
                :tables="$tables"
            />

            <div class="mt-6 flex">
                <x-admin.form.back-link :route="route('admin.reservations.index')"/>
                <x-admin.form.submit/>
            </div>
        </form>
    </x-admin.form.container-form>
</x-layouts.admin>