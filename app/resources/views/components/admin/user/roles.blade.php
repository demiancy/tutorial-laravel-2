@props([
    'user',
])

<ul class="capitalize">
    @foreach ($user->roles as $role)
        <li>{{ $role->name }}</li>
    @endforeach
</ul>