@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-white rounded-[4px] shadow-sm
border-gray-200 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50']) !!}>