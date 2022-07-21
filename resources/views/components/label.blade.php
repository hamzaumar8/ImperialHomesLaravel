@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-[600] text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>