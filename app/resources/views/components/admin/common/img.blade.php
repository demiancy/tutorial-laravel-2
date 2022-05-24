@props([
    'file' => '',
    'size' => '16'
])

<img 
    src="{{ Storage::exists($file) ? Storage::url($file) : asset('images/default.jpg') }}" 
    class="w-{{ $size }} h-{{ $size }} rounded"
>