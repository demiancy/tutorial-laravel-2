@props(['tables'])

<table class="min-w-full table-auto">
    <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>{{ __('model.common.name') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.table.guest_number') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.table.status') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.table.location') }}</x-admin.index.th>

            <th scope="col" class="py-3 px-6 w-44">
                <span class="sr-only">{{ __('admin.common.actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tables as $table)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $table->name }}</x-admin.index.td>
                <x-admin.index.td>{{ $table->guest_number }}</x-admin.index.td>
                <x-admin.index.td>{{ $table->status }}</x-admin.index.td>
                <x-admin.index.td>{{ $table->location }}</x-admin.index.td>
                <x-admin.index.td>
                    <div class="grid space-y-2">
                        <x-admin.index.edit-link :route="route('admin.tables.edit', $table->id)"/>
                        <x-admin.index.delete-link :route="route('admin.tables.destroy', $table->id)"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>