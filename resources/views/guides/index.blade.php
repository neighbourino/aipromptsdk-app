<x-app-layout>

    @push('seo')
        {!! seo($SEOData) !!}
    @endpush




    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.
                </p>


                <livewire:guides.index-guides />
            </div>
        </div>
    </div>


</x-app-layout>
