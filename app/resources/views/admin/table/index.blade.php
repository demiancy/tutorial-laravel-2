<x-layouts.admin>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
        </div>
    </div>
</x-layouts.admin>