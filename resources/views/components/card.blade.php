@props(['highlight' => false])

<div @class(['highlight test' => $highlight, 'card'])>
    {{ $slot }}
    {{-- <a href="{{ $attributes->get('href') }}" class="btn">View details</a> //pass specific attribute --}}
    <a {{ $attributes }} class="btn">View details</a>
</div>
