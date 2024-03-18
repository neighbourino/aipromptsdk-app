<x-app-layout>

    @push('seo')
        {!! seo($SEOData) !!}
    @endpush

    <livewire:prompts.index-prompts />

</x-app-layout>
