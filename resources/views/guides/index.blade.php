<x-app-layout>

    @push('seo')
        {!! seo($SEOData) !!}
    @endpush


    <div class=" py-6 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <p class="text-base font-semibold leading-7 text-indigo-600 ">Hvordan gør man?</p>
                <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Guides</h2>
                <p class="mt-3 text-base leading-8 text-gray-600">Guides til AI prompting. Til de helt nye begyndere og
                    til de øvede.</p>
            </div>
        </div>
    </div>


    <div class=" py-6 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class=" bg-white rounded p-6 shadow">
                <livewire:guides.index-guides />
            </div>
        </div>
    </div>


</x-app-layout>
