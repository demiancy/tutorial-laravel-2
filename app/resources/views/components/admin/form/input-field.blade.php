@props([
    'field'   => 'field',
    'type'    => 'text',
    'value'   => '',
    'label'   => 'label',
    'preview' => ''
])

<x-admin.form.container-field 
    :field="$field"
    :label="$label"
>
    {{ $preview }}
    <x-admin.form.input
        :field="$field"
        :type="$type"
        :value="$value"
        :attributes="$attributes"
    />
</x-admin.form.field>