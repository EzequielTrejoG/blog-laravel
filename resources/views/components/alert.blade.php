@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $color = 'text-blue-800 bg-blue-100';
            break;

        case 'danger':
            $color = 'text-red-800 bg-red-100';
            break;

        case 'success':
            $color = 'text-green-800 bg-green-100';
            break;

        case 'warning':
            $color = 'text-yellow-800 bg-yellow-100';
            break;

        case 'dark':
            $color = 'text-gray-800 bg-gray-100';
            break;
        
        default:
            $color = 'text-blue-800 bg-blue-100';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $color]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Alerta por defecto' }}</span> {{ $slot }}
</div>