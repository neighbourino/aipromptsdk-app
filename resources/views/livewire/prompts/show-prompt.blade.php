<div>

    <div class="py-24 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="overflow-hidden rounded-lg bg-white shadow">
                <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                <div class="bg-white p-6">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex sm:space-x-5">
                            <div class="flex-shrink-0">

                                <div class="w-20 h-20 p-1 rounded-full shadow-inner flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                    </svg>
                                </div>

                            </div>
                            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                {{-- <p class="text-sm font-medium text-gray-600">Welcome back,</p> --}}
                                <h1 class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $prompt->title }}</h1>
                                <div class="text-sm font-medium text-gray-600">{!! $prompt->description !!}</div>
                            </div>
                        </div>
                        {{-- <div class="mt-5 flex justify-center sm:mt-0">
                            <a href="#"
                                class="flex items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">View
                                profile</a>
                        </div> --}}
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 divide-y divide-gray-200 border-t border-gray-200 bg-gray-50 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
                    <div class="px-6 py-5 text-center text-xs font-medium">
                        <span class="block text-gray-900">Senest opdateret</span>
                        <span class="text-gray-500">{{ $prompt->updated_at->format('d-m-Y') }}</span>
                    </div>
                    <div class="px-6 py-5 text-center text-sm font-medium">

                    </div>
                    <div class="px-6 py-5 text-center text-sm font-medium">

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="py-24 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            {{-- <div class="overflow-hidden bg-white shadow sm:rounded-lg mb-6">
                <div class="px-4 py-6 sm:px-6">
                    <h3 class="text-2xl font-semibold leading-7 text-gray-900">{{ $prompt->title }}</h3>
                    <div class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{!! $prompt->description !!}</div>
                </div>

            </div> --}}


            <div class="overflow-hidden bg-white shadow sm:rounded-lg mb-12">

                <div class="px-4 py-6 sm:px-6">
                    <h4 class="text-xl font-semibold leading-7 text-gray-900">Setup</h4>
                    <div class="mt-1 max-w-2xl text-sm leading-6 text-gray-500"></div>
                </div>

                <div class="border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Assistentforberedelse</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $prompt->role_system }}

                                <div class="bg-slate-50 py-1 px-3 flex justify-end mt-3 rounded">

                                    <div x-data="{
                                        link: '{{ $prompt->role_system }}',
                                        copied: false,
                                        timeout: null,
                                        copy() {
                                            $clipboard(this.link)
                                    
                                            this.copied = true
                                    
                                    
                                            clearTimeout(this.timeout)
                                    
                                            this.timeout = setTimeout(() => {
                                                this.copied = false
                                            }, 3000)
                                        }
                                    }">
                                        <span class="hidden"> <input type="text" value="{{ $prompt->role_user }}"
                                                readonly /></span>
                                        <button x-on:click="copy"
                                            :class="copied ? 'bg-indigo-600 text-white' : 'bg-white'"
                                            class="p-1 rounded m-1 bg-white shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                            </dd>
                        </div>

                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 relative">
                            <dt class="text-sm font-medium text-gray-900">Opgavebeskrivelse</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $prompt->role_user }}


                                <div class="bg-slate-50 py-1 px-3 flex justify-end mt-3 rounded">

                                    <div x-data="{
                                        link: '{{ $prompt->role_user }}',
                                        copied: false,
                                        timeout: null,
                                        copy() {
                                            $clipboard(this.link)
                                    
                                            this.copied = true
                                    
                                    
                                            clearTimeout(this.timeout)
                                    
                                            this.timeout = setTimeout(() => {
                                                this.copied = false
                                            }, 3000)
                                        }
                                    }">
                                        <span class="hidden"> <input type="text" value="{{ $prompt->role_user }}"
                                                readonly /></span>
                                        <button x-on:click="copy"
                                            :class="copied ? 'bg-indigo-600 text-white' : 'bg-white'"
                                            class="p-1 rounded m-1 bg-white shadow">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                            </dd>




                        </div>




                    </dl>
                </div>
            </div>


            <div class="overflow-hidden bg-white shadow sm:rounded-lg">

                <div class="px-4 py-6 sm:px-6">
                    <h4 class="text-xl font-semibold leading-7 text-gray-900">Output</h4>
                    <div class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Dit output vil komme i ren tekst.</div>
                </div>

                <div class="border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Output Eksempel</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 prose">
                                {!! $prompt->example_output !!}
                        </div>

                    </dl>
                </div>
            </div>

        </div>

    </div>


</div>
