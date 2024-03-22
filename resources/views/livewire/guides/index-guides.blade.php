<div class="mt-6 space-y-12 lg:mt-6 lg:space-y-12">


    @foreach ($guides as $key => $guide)
        @php
            $mediaItems = $guide->getMedia('guides');
            $thumbnailUrl =
                $mediaItems && count($mediaItems) > 0
                    ? $mediaItems[0]->getFullUrl()
                    : asset('assets/images/guide-thumbnail-fallback.png');

        @endphp
        <article class="relative isolate flex flex-col gap-8 lg:flex-row border-b border-indigo-100 pb-6">
            <a href="{{ route('guides.show', $guide) }}"
                class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                <img src="{{ $thumbnailUrl }}" alt=""
                    class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
            </a>
            <div>
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    <a href="#"
                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                </div>
                <div class="group relative max-w-xl">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="{{ route('guides.show', $guide) }}">
                            <span class="absolute inset-0"></span>
                            {{ $guide->title }}
                        </a>
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates
                        culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde.
                        Sed exercitationem placeat consectetur nulla deserunt vel iusto corrupti dicta
                        laboris incididunt.</p>
                </div>
                <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                    <div class="relative flex items-center gap-x-4">
                        {{-- <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-10 w-10 rounded-full bg-gray-50"> --}}
                        <div class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-8 h-8">
                                <path fill-rule="evenodd"
                                    d="M12 3.75a6.715 6.715 0 0 0-3.722 1.118.75.75 0 1 1-.828-1.25 8.25 8.25 0 0 1 12.8 6.883c0 3.014-.574 5.897-1.62 8.543a.75.75 0 0 1-1.395-.551A21.69 21.69 0 0 0 18.75 10.5 6.75 6.75 0 0 0 12 3.75ZM6.157 5.739a.75.75 0 0 1 .21 1.04A6.715 6.715 0 0 0 5.25 10.5c0 1.613-.463 3.12-1.265 4.393a.75.75 0 0 1-1.27-.8A6.715 6.715 0 0 0 3.75 10.5c0-1.68.503-3.246 1.367-4.55a.75.75 0 0 1 1.04-.211ZM12 7.5a3 3 0 0 0-3 3c0 3.1-1.176 5.927-3.105 8.056a.75.75 0 1 1-1.112-1.008A10.459 10.459 0 0 0 7.5 10.5a4.5 4.5 0 1 1 9 0c0 .547-.022 1.09-.067 1.626a.75.75 0 0 1-1.495-.123c.041-.495.062-.996.062-1.503a3 3 0 0 0-3-3Zm0 2.25a.75.75 0 0 1 .75.75c0 3.908-1.424 7.485-3.781 10.238a.75.75 0 0 1-1.14-.975A14.19 14.19 0 0 0 11.25 10.5a.75.75 0 0 1 .75-.75Zm3.239 5.183a.75.75 0 0 1 .515.927 19.417 19.417 0 0 1-2.585 5.544.75.75 0 0 1-1.243-.84 17.915 17.915 0 0 0 2.386-5.116.75.75 0 0 1 .927-.515Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    AI Prompts
                                </a>
                            </p>
                            <p class="text-gray-600">Redaktør</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    @endforeach



    {{ $guides->links() }}

</div>
