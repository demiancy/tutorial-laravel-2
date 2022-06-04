@props([
    'role',
])

<ul class="capitalize">
    @foreach ($role->permissions as $permission)
        <li>{{ __("permissions.$permission->name") }}</li>
    @endforeach
</ul>