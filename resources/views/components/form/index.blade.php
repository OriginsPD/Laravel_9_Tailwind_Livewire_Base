<form {{ $attributes->merge(['class' => 'border border-gray-200 rounded space-y-8 p-5 divide-y divide-gray-200']) }}>

    {{ $slot }}

    <div class="pt-5">

        <div class="flex justify-end">

            {{ $button }}

        </div>
        
    </div>
</form>
