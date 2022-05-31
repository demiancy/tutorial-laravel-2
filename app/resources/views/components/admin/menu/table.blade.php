@props([
    'menus',
    'params' => []
])

<table class="min-w-full table-auto">
    <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>@sortablelink('name', __('model.common.name'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>{{ __('model.common.image') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.common.description') }}</x-admin.index.th>
            <x-admin.index.th>@sortablelink('price', __('model.menu.price'), [],  ['rel' => 'nofollow'])</x-admin.index.th>

            <th scope="col" class="py-3 px-6 w-44">
                <span class="sr-only">{{ __('admin.common.actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menus as $menu)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $menu->name }}</x-admin.index.td>
                <x-admin.index.td>
                    <x-admin.common.img :file="$menu->image"/>
                </x-admin.index.td>
                <x-admin.index.td>{{ $menu->description }}</x-admin.index.td>
                <x-admin.index.td>${{ $menu->price }}</x-admin.index.td>
                <x-admin.index.td>
                    <div class="flex space-y-2 grid">
                        <x-admin.index.edit-link :route="route('admin.menus.edit', array_merge($params, ['menu' => $menu->id]))"/>
                        <x-admin.index.delete-link :route="route('admin.menus.destroy', array_merge($params, ['menu' => $menu->id]))"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>