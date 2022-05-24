<x-layouts.admin>
    <x-admin.common.title title="Reservations"/>

    <div class="flex justify-end">
        <x-admin.index.new-link 
            :route="route('admin.reservations.create')"
            :text="__('New reservation')"
        />
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <x-admin.reservation.table
                        :reservations="$reservations"
                    />
                </div>
            </div>
        </div>
    </div>    
</x-layouts.admin>