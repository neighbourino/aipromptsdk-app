<x-app-layout>

    <div id="particles-js" class="absolute w-full h-full bg-indigo-100"></div>


    <div class="relative z-10">
        <div class="">
            <div class=" shadow-inner">
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

        <div>

            <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                        <div class="max-w-xl lg:max-w-lg">
                            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Tilmeld dig
                                nyhedsbrevet!
                                <nyhedsbrevet></nyhedsbrevet>
                            </h2>
                            <p class="mt-4 text-lg leading-8 text-gray-300">Få tilsendt prompts, artikler, tips og
                                guides direkte i indbakken.</p>

                            @livewire('newsletter-signup')

                        </div>
                        <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                            <div class="flex flex-col items-start">
                                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                    </svg>
                                </div>
                                <dt class="mt-4 font-semibold text-white">Ugentlige artikler, tips og tricks</dt>
                                <dd class="mt-2 leading-7 text-gray-400">Vi sender hver uge minimum én ny prompt, samt
                                    artikler, tests og guides.</dd>
                            </div>
                            <div class="flex flex-col items-start">
                                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                                    </svg>
                                </div>
                                <dt class="mt-4 font-semibold text-white">SPAM-fri</dt>
                                <dd class="mt-2 leading-7 text-gray-400">Vi lover ikke at spamme dig med andet end det
                                    aftalte.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
                    <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
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
