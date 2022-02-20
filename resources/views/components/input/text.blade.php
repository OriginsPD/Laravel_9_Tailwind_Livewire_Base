@props([
'leadingAddon' => null,
'error' => null
])

@php

$currentClass = $leadingAddon
? 'rounded-none rounded-r-md'
: 'rounded';

$class = 'flex-1 form-input focus:ring-indigo-500 placeholder-gray-400 focus:border-indigo-500 block w-full min-w-0 sm:text-sm
border-gray-300 '.$currentClass

@endphp

<div class="mt-1 flex rounded-md ">

    @if($leadingAddon)
    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
        {{ config('app.name') }}.com/
    </span>
    @endif

    <input {{ $attributes->merge(['class' => $class]) }}>

    <div>
        
        @if($error)
            <p class="mt-1 text-xs italic text-red-600" id="error">{{ $error }}</p>
        @endif

    </div>

</div>
