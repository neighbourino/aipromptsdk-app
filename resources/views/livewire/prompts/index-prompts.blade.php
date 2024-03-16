<div>



    <div class="py-24 sm:py-32 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            @if ($prompts)



                <ul role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">


                    @foreach ($prompts as $key => $prompt)
                        <li class="overflow-hidden rounded-xl border border-gray-200 hover:shadow transition-shadow">
                            <a href="{{ route('prompts.show', $prompt->id) }}" class="">
                                <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
                                    {{-- <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="Tuple"
                                        class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10"> --}}
                                    <div
                                        class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>

                                    </div>
                                    <div class="text-sm font-medium leading-6 text-gray-900">{{ $prompt->title }}</div>

                                </div>
                                <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
                                    <div class="flex justify-between gap-x-4 py-3">
                                        <dd class="flex items-start gap-x-2 text-gray-500">
                                            {{ $prompt->short_description }}
                                        </dd>
                                    </div>
                                    <div class="flex justify-between gap-x-4 py-3 text-xs">
                                        <dt class="text-gray-500">Senest opdateret</dt>
                                        <dd class="text-gray-700"><time
                                                datetime="2022-12-13">{{ $prompt->updated_at->format('d-m-Y') }}</time>
                                        </dd>
                                    </div>

                                </dl>
                            </a>
                        </li>
                    @endforeach


                </ul>

            @endif
        </div>

    </div>




</div>
