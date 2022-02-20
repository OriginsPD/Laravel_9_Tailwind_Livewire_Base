@props([
'for' => false,
'label' => false,
])

<label {{ $for }} {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700'])->only('class') }}>

    {{ $label }}

    {{ $slot }}


</label>
