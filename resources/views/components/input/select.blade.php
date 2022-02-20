@props([
    'error' => false
])

<div class="mt-1">

    <select {{ $attributes->merge(['class' => 'shadow-sm form-select focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md']) }}>

        {{ $slot }}

    </select>

     <div>

         @if($error)
            
            <p class="mt-1 text-xs italic text-red-600" id="error">{{ $error }}</p>
         
         @endif

     </div>


</div>
