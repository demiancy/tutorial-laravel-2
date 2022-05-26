@props([
    'field'   => 'field',
    'type'    => 'text',
    'value'   => '',
    'label'   => 'label',
])

<x-admin.form.input-field 
    :field="$field" 
    type="file"
    :label="$label"
>
    @if ($value && strlen($value))
        <x-slot name="preview">
            <div class="my-2">
                <x-admin.common.img 
                    :file="$value"
                    size="32"
                />
            </div>
        </x-slot>
    @endif
</x-admin.form.input-field>