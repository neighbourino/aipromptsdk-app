<x-app-layout>

    {{-- @push('seo')
        {!! seo($SEOData) !!}
    @endpush --}}

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <p class="text-base font-semibold leading-7 text-indigo-600">Guide</p>
                <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{ $guide->title }}</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $guide->description }}</p>
            </div>
        </div>
    </div>



    @if ($guide->content)

        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">

                    @foreach ($guide->content as $key => $blockComponent)
                        <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                    @endforeach

                </div>
            </div>
        </div>

    @endif



</x-app-layout>
