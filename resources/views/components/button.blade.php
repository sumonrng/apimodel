@props(['type','value'])
<button type="{{ $type }}" {{ $attributes->merge(['class'=>'btn']) }} {{$attributes}}>
    {{ $value ?? $slot }}
</button>