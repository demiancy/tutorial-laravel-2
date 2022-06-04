@props([
    'roles'  => [],
    'params' => []
])

<table class="min-w-full table-auto">
    <thead class="bg-gray-200 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>{{ __('model.common.name')  }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.role.permissions') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.common.created_at') }}</x-admin.index.th>

            <th scope="col" class="py-3 px-6 w-44">
                <span class="sr-only">{{ __('admin.common.actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $role->name }}</x-admin.index.td>
                <x-admin.index.td>
                    <x-admin.role.permissions :role="$role" />
                </x-admin.index.td>
                <x-admin.index.td>{{ $role->created_at->isoFormat('LL - H:mm') }}</x-admin.index.td>

                <x-admin.index.td>
                    <div class="grid space-y-2">
                        <x-admin.index.edit-link :route="route('admin.roles.edit', array_merge($params, ['role' => $role->id]))"/>
                        <x-admin.index.delete-link :route="route('admin.roles.destroy', array_merge($params, ['role' => $role->id]))"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>