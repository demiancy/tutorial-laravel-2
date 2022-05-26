@props(['categories'])

<table class="min-w-full">
    <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>{{ __('model.common.name') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.common.image') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.common.description') }}</x-admin.index.th>

            <th scope="col" class="relative py-3 px-6">
                <span class="sr-only">{{ __('admin.common.actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $category->name }}</x-admin.index.td>
                <x-admin.index.td>
                    <x-admin.common.img :file="$category->image"/>
                </x-admin.index.td>
                <x-admin.index.td>{{ $category->description }}</x-admin.index.td>
     
                <x-admin.index.td>
                    <div class="grid space-y-2">
                        <x-admin.index.edit-link :route="route('admin.categories.edit', $category->id)"/>
                        <x-admin.index.delete-link :route="route('admin.categories.destroy', $category->id)"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>