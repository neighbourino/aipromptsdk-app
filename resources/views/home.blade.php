<x-app-layout>


    <div class="">
        <div class="bg-slate-50 shadow-inner">
            <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-4xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight  sm:text-4xl">AI prompts på dansk.<br>
                        Søgbare, kuraterede prompts til din foretrukne platform.</h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-slate-600">Alt du skal bruge for at skærpe
                        din udnyttelse af de mest populære AI-værktøjer. Alt for at lette din hverdag.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ route('prompts.index') }}"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Gå
                            til prompts</a>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div>
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Promtps til de mest populære
                    platforme</h2>
                <div
                    class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="{{ asset('assets/images/ai-platforms/chat-gpt.png') }}" alt="Chat GPT" width="158"
                        height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                        src="{{ asset('assets/images/ai-platforms/dalle.png') }}" alt="Dall-E" width="158"
                        height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="{{ asset('assets/images/ai-platforms/mid-journey.png') }}" alt="Mid Journey" width="158"
                        height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="{{ asset('assets/images/ai-platforms/adobe-firefly.png') }}" alt="Adobe Firefly"
                        width="158" height="48">

                    <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                        src="{{ asset('assets/images/ai-platforms/bard.png') }}" alt="Bard" width="158"
                        height="48">
                </div>
            </div>
        </div>

    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </div> --}}



</x-app-layout>
