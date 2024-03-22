@php
    $data = $attributes['info']['data'];
@endphp
@if (isset($data['level']))
    <div class="border-b border-gray-200 pb-5">
        @switch($data['level'])
            @case('h1')
                <h1 class="text-base font-semibold leading-6 text-gray-900">{{ $data['content'] }}</h1>
            @break

            @case('h2')
                <h2 class="text-base font-semibold leading-6 text-gray-900">{{ $data['content'] }}</h2>
            @break

            @default
                <h3 class="text-base font-semibold leading-6 text-gray-900">{{ $data['content'] }}</h3>
        @endswitch
    </div>
@endif
