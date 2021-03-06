@props([
    'reservations',
    'params'     => []
])

<table class="min-w-full table-auto">
    <thead class="bg-gray-200 dark:bg-gray-700">
        <tr>
            <x-admin.index.th>{{ __('model.common.name') }}</x-admin.index.th>
            <x-admin.index.th>@sortablelink('email', __('model.common.email'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>@sortablelink('date', __('model.reservation.date'), [],  ['rel' => 'nofollow'])</x-admin.index.th>
            <x-admin.index.th>{{ __('model.common.table') }}</x-admin.index.th>
            <x-admin.index.th>{{ __('model.reservation.guest_number') }}</x-admin.index.th>

            <th scope="col" class="py-3 px-6 w-44">
                <span class="sr-only">{{ __('admin.common.actions') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <x-admin.index.td>{{ $reservation->first_name }} {{ $reservation->last_name }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->email }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->date->isoFormat('LL - H:mm') }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->table->name }}</x-admin.index.td>
                <x-admin.index.td>{{ $reservation->guest_number }}</x-admin.index.td>
                <x-admin.index.td>
                    <div class="grid space-y-2">
                        @if ($reservation->canEdit())
                            <x-admin.index.edit-link :route="route('admin.reservations.edit', array_merge($params, ['reservation' => $reservation->id]))"/>
                        @endif
                        <x-admin.index.delete-link :route="route('admin.reservations.destroy', array_merge($params, ['reservation' => $reservation->id]))"/>
                    </div>
                </x-admin.index.td>
            </tr>
        @endforeach
    </tbody>
</table>