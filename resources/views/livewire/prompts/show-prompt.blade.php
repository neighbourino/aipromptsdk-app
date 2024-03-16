<div>

    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="overflow-hidden bg-white shadow sm:rounded-lg mb-6">
                <div class="px-4 py-6 sm:px-6">
                    <h3 class="text-2xl font-semibold leading-7 text-gray-900">{{ $prompt->title }}</h3>
                    <div class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{!! $prompt->description !!}</div>
                </div>

            </div>


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
