@props(['name', 'display'])

<x-form.field>

    <x-form.label :name="$name" :display="$display" />

    <input name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes(['value' => old($name), 'class' => "form-control"]) }} />

    <x-form.error :name="$name" />

</x-form.field>