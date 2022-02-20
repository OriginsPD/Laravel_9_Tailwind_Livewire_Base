@props([
    'maxWidth'
])


@php
    
    switch($maxWidth ?? 'sm:col-span-3'){
        case 'lg':
            $maxWidth = 'sm:col-span-6';
            break;
        case 'md':
            $maxWidth = 'sm:col-span-4';  
            break;
        // case 'sm':
        //     $maxWidth = "sm:col-span-2";    
        //     break;
        case true:    
        default:
            $maxWidth = 'sm:col-span-3';
            break;    
    }

@endphp


<div {{ $attributes->merge(['class' => $maxWidth]) }}>

    {{ $slot }}

</div>