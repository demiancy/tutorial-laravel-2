@props([
    'value'    => '',
    'text'     => 'text',
    'selected' => false
])

<option value="{{ $value }}" {{ ($selected) ? 'selected' : '' }}>
    {{ $text }}
</option>

