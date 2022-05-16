@props(['categories'])

<table class="min-w-full">
    <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>{{ __('name') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('image') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('description') }}</x-admin.index.th>

            <th scope="col" class="relative py-3 px-6">
                <span class="sr-only">{{ __('actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $category->name }}</x-admin.index.td>
                <x-admin.index.td>
                    <img src="{{ Storage::url($category->image) }}" class="w-16 h-16 rounded">
                </x-admin.index.td>
                <x-admin.index.td>{{ $category->description }}</x-admin.index.td>
     
                <x-admin.index.td>
                    <div class="flex space-x-2">
                        <x-admin.index.edit-link :route="route('admin.categories.edit', $category->id)"/>
                        <x-admin.index.delete-link :route="route('admin.categories.destroy', $category->id)"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>