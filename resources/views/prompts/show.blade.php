<x-app-layout>

    @push('seo')
        {!! seo()->for($prompt) !!}
    @endpush

    <livewire:prompts.show-prompt :prompt="$prompt" />

</x-app-layout>
