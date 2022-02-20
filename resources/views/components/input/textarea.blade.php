@props([
'error' => false
])

<div class="mt-1 flex-col">

    <textarea rows="4" {{ $attributes->merge(['class' => 'shadow-sm form-textarea focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 resize-none rounded-md']) }}>


    </textarea>

    <div>

        @if($error)

            <p class="mt-1 text-xs italic text-red-600" id="error">{{ $error }}</p>

        @else

            <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>


        @endif

    </div>


</div>
