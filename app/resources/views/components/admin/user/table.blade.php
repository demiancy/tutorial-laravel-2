@props([
    'users',
    'params' => []
])

<table class="min-w-full table-auto">
    <thead class="bg-gray-200 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>@sortablelink('name', __('model.common.name'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>@sortablelink('email', __('model.common.email'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>{{ __('model.user.role') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.common.created_at') }}</x-admin.index.th>

            <th scope="col" class="py-3 px-6 w-44">
                <span class="sr-only">{{ __('admin.common.actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $user->name }}</x-admin.index.td>
                <x-admin.index.td>{{ $user->email }}</x-admin.index.td>
                <x-admin.index.td>
                    <x-admin.user.roles :user="$user" />
                </x-admin.index.td>
                <x-admin.index.td>{{ $user->created_at->isoFormat('LL - H:mm') }}</x-admin.index.td>

                <x-admin.index.td>
                    <div class="grid space-y-2">
                        <x-admin.index.edit-link :route="route('admin.users.edit', array_merge($params, ['user' => $user->id]))"/>
                        <x-admin.index.delete-link :route="route('admin.users.destroy', array_merge($params, ['user' => $user->id]))"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>