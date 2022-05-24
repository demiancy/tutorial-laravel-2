@props(['tables'])

<table class="min-w-full">
    <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>{{ __('name') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('guest') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('status') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('location') }}</x-admin.index.th>

            <th scope="col" class="relative py-3 px-6">
                <span class="sr-only">{{ __('actions') }}</span>
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
                    <div class="flex space-x-2 justify-end">
                        <x-admin.index.edit-link :route="route('admin.tables.edit', $table->id)"/>
                        <x-admin.index.delete-link :route="route('admin.tables.destroy', $table->id)"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>