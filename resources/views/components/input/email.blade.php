@props([
    'leadingAddon' => null,
    'error' => false
])

@php
    
    $currentClass = $leadingAddon 
                    ? 'rounded-md pl-10'
                    : 'rounded';

     $class = 'form-input focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 '.$currentClass


@endphp 

<div class="mt-1 relative rounded-md flex-col">

    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

        @if($leadingAddon)

            <!-- Heroicon name: solid/mail -->
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
            </svg>

        @endif
        

    </div>

    <input type="email" {{ $attributes->merge(['class' => $class]) }} placeholder="Example@Mail.com">

      <div>

          @if($error)
          <p class="mt-1 text-xs italic text-red-600" id="error">{{ $error }}</p>
          @endif

      </div>



</div>
