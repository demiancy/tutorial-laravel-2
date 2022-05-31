@props([
    'action'  => '#',
    'enctype' => 'multipart/form-data'
])

<div class="p-4 bg-slate-100 dark:bg-gray-800 rounded">
    <div class="space-y-8 divide-y divide-gray-200">
        <form method="POST" action="{{ $action }}" enctype="{{ $enctype }}">
            @csrf
            {{ $slot }}
        </form>
    </div>
</div>