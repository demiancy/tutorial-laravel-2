@props(['reservations'])

<table class="min-w-full">
    <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>{{ __('name') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('email') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('date') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('table') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('guests') }}</x-admin.index.th>

            <th scope="col" class="relative py-3 px-6">
                <span class="sr-only">{{ __('actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $reservation->first_name }} {{ $reservation->last_name }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->email }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->date }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->table->name }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->guest_number }}</x-admin.index.td>
                <x-admin.index.td>
                    <div class="flex space-x-2 justify-end">
                        @if ($reservation->canEdit())
                            <x-admin.index.edit-link :route="route('admin.reservations.edit', $reservation->id)"/>
                        @endif
                        <x-admin.index.delete-link :route="route('admin.reservations.destroy', $reservation->id)"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>