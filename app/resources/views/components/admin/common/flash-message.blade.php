@props([
    'message' => '',
])

@if (session()->has($message))
    <div
        {!! $attributes->merge(['class' => "p-4 mb-4 text-sm rounded-lg"]) !!}
        role="alert"
    >
        <span class="font-medium">{{ session()->get($message) }}!</span>
    </div>
@endif
