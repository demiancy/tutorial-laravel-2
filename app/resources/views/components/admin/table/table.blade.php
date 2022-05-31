@props([
    'tables',
    'params' => []
])

<table class="min-w-full table-auto">
    <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>@sortablelink('name', __('model.common.name'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>@sortablelink('guest_number', __('model.table.guest_number'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>@sortablelink('status', __('model.table.status'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>@sortablelink('location', __('model.table.location'), [],  ['rel' => 'nofollow'])</x-admin.index.th>

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
                        <x-admin.index.edit-link :route="route('admin.tables.edit', array_merge($params, ['table' => $table->id]))"/>
                        <x-admin.index.delete-link :route="route('admin.tables.destroy', array_merge($params, ['table' => $table->id]))"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>