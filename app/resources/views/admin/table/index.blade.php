<x-layouts.admin>
    <x-admin.common.title title="Tables"/>

    <div class="flex justify-end">
        <x-admin.index.new-link 
            :route="route('admin.tables.create')"
            :text="__('New table')"
        />
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <x-admin.table.table
                        :tables="$tables"
                    />
                </div>
            </div>
        </div>
    </div>    
</x-layouts.admin>