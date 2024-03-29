<div>

    <div class=" py-6 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <p class="text-base font-semibold leading-7 text-indigo-600 ">Bibliotek</p>
                <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Prompts</h2>
                <p class="mt-3 text-base leading-8 text-gray-600">Søg og filtrer på hele vores kuraterede bibilotek af AI
                    prompts på dansk.</p>
            </div>
        </div>
    </div>




    <div class="" x-data="{ open: false }" @keydown.window.escape="open = false">
        <!-- Mobile filter dialog -->

        <div x-show="open" class="relative z-40 lg:hidden"
            x-description="Off-canvas filters for mobile, show/hide based on off-canvas filters state." x-ref="dialog"
            aria-modal="true" style="display: none;">

            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
                class="fixed inset-0 bg-black bg-opacity-25" style="display: none;"></div>


            <div class="fixed inset-0 z-40 flex">

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                    class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl"
                    @click.away="open = false" style="display: none;">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button"
                            class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400"
                            @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4 border-t border-gray-200">



                        {{-- <h3 class="sr-only">Categories</h3>
                        <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                            <li>
                                <a href="#" class="block px-2 py-3">Totes</a>
                            </li>
                            <li>
                                <a href="#" class="block px-2 py-3">Backpacks</a>
                            </li>
                            <li>
                                <a href="#" class="block px-2 py-3">Travel Bags</a>
                            </li>
                            <li>
                                <a href="#" class="block px-2 py-3">Hip Bags</a>
                            </li>
                            <li>
                                <a href="#" class="block px-2 py-3">Laptop Sleeves</a>
                            </li>

                        </ul> --}}

                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Color</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5"
                                            x-description="Expand icon, show/hide based on section open state."
                                            x-show="!(open)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5"
                                            x-description="Collapse icon, show/hide based on section open state."
                                            x-show="open" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            style="display: none;">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-mobile-0" x-show="open" style="display: none;">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">White</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Beige</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-2" name="color[]" value="blue"
                                            type="checkbox" checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Blue</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-3" name="color[]" value="brown"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Brown</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-4" name="color[]" value="green"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Green</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-5" name="color[]" value="purple"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-5"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Purple</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-1" @click="open = !open"
                                    aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Category</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5"
                                            x-description="Expand icon, show/hide based on section open state."
                                            x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5"
                                            x-description="Collapse icon, show/hide based on section open state."
                                            x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" style="display: none;">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-mobile-1" x-show="open" style="display: none;">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-0" name="category[]" value="new-arrivals"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">New Arrivals</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-1" name="category[]" value="sale"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-2" name="category[]" value="travel"
                                            type="checkbox" checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-3" name="category[]" value="organization"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-4" name="category[]" value="accessories"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-2" @click="open = !open"
                                    aria-expanded="false" x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Size</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5"
                                            x-description="Expand icon, show/hide based on section open state."
                                            x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5"
                                            x-description="Collapse icon, show/hide based on section open state."
                                            x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" style="display: none;">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-mobile-2" x-show="open" style="display: none;">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-0" name="size[]" value="2l"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">2L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-1" name="size[]" value="6l"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">6L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-2" name="size[]" value="12l"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">12L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-3" name="size[]" value="18l"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">18L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-4" name="size[]" value="20l"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">20L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-5" name="size[]" value="40l"
                                            type="checkbox" checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-5"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">40L</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>


        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-12 ">
            <div class="flex items-baseline justify-end py-6 ">

                <div class="mr-auto w-full">

                    <div class="flex flex-1 justify-left">
                        <div class="w-full max-w-lg lg:max-w-xs">
                            <label for="search" class="sr-only">Search</label>
                            <div
                                class="relative text-gray-400 focus-within:text-gray-600 shadow border border-gray-100 rounded">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input wire:model.live="searchTerm" id="search"
                                    class="block w-full rounded-md border-0 bg-white py-1.5 pl-10 pr-3 text-gray-900 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Søg" type="search" name="search">
                            </div>
                        </div>
                    </div>
                </div>


                @if (1 == 1)
                    <div class="flex items-center">
                        <div x-data="Components.menu({ open: false })" x-init="init()"
                            @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)"
                            class="relative inline-block text-left">
                            <div>
                                <button type="button"
                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                    id="menu-button" x-ref="button" @click="onButtonClick()"
                                    @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()"
                                    aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()"
                                    @keydown.arrow-up.prevent="onArrowUp()"
                                    @keydown.arrow-down.prevent="onArrowDown()">
                                    Sort
                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>


                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
                                x-bind:aria-activedescendant="activeDescendant" role="menu"
                                aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()"
                                @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()"
                                @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm"
                                        x-state:on="Active" x-state:off="Not Active"
                                        x-state:on:option.current="Selected" x-state:off:option.current="Not Selected"
                                        x-state-description="Selected: &quot;font-medium text-gray-900&quot;, Not Selected: &quot;text-gray-500&quot;"
                                        :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1"
                                        id="menu-item-0" @mouseenter="onMouseEnter($event)"
                                        @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)"
                                        @click="open = false; focusButton()">Mest populære</a>
                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                        x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                        :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1"
                                        id="menu-item-1" @mouseenter="onMouseEnter($event)"
                                        @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)"
                                        @click="open = false; focusButton()">Best Rating</a>
                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                        x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                        :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1"
                                        id="menu-item-2" @mouseenter="onMouseEnter($event)"
                                        @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)"
                                        @click="open = false; focusButton()">Newest</a>
                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                        x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                        :class="{ 'bg-gray-100': activeIndex === 3 }" role="menuitem" tabindex="-1"
                                        id="menu-item-3" @mouseenter="onMouseEnter($event)"
                                        @mousemove="onMouseMove($event, 3)" @mouseleave="onMouseLeave($event)"
                                        @click="open = false; focusButton()">Price: Low to High</a>
                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                        x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                        :class="{ 'bg-gray-100': activeIndex === 4 }" role="menuitem" tabindex="-1"
                                        id="menu-item-4" @mouseenter="onMouseEnter($event)"
                                        @mousemove="onMouseMove($event, 4)" @mouseleave="onMouseLeave($event)"
                                        @click="open = false; focusButton()">Price: High to Low</a>

                                </div>
                            </div>

                        </div>

                        <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                            <span class="sr-only">View grid</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <button type="button"
                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden"
                            @click="open = true">
                            <span class="sr-only">Filters</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                @endif
            </div>

            <section aria-labelledby="products-heading" class="pb-24 pt-6 bg-white rounded p-6 shadow relative">
                @if ($hasActiveFilters)
                    <div class=" border-t border-slate-50 pt-6 absolute top-0 left-0 -mt-6">
                        <button type="button"
                            class="flex items-center mx-auto py-1 px-3 bg-gray-400 hover:bg-gray-500 text-white hover:bg-theme-accent-secondary hover:text-theme-accent-primary text-sm rounded-br-md transition ease-in-out duration-300"
                            wire:click="resetFilters()">
                            <span class="inline-block mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </span>
                            Nulstil filtre
                        </button>
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Filters -->
                    <form class="hidden lg:block">


                        {{-- 
                        <h3 class="sr-only">Categories</h3>
                        <ul role="list"
                            class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                            <li>
                                <a href="#">Totes</a>
                            </li>
                            <li>
                                <a href="#">Backpacks</a>
                            </li>
                            <li>
                                <a href="#">Travel Bags</a>
                            </li>
                            <li>
                                <a href="#">Hip Bags</a>
                            </li>
                            <li>
                                <a href="#">Laptop Sleeves</a>
                            </li>

                        </ul> --}}

                        <div x-data="{ open: true }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Kategorier</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5"
                                            x-description="Expand icon, show/hide based on section open state."
                                            x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5"
                                            x-description="Collapse icon, show/hide based on section open state."
                                            x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" style="display: none;">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-4" x-show="open" style="display: none;">
                                <div class="space-y-4">



                                    @foreach ($categoryOptions as $key => $category)
                                        <div class="flex items-center">
                                            <input id="filter-category-{{ $category->id }}" name="categories[]"
                                                value="{{ $category->id }}" type="checkbox"
                                                wire:model.live="categories"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-{{ $category->id }}"
                                                class="cursor-pointer ml-3 text-sm text-gray-600">
                                                {{ $category->name }}</label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                        <div x-data="{ open: true }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Platform</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5"
                                            x-description="Expand icon, show/hide based on section open state."
                                            x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5"
                                            x-description="Collapse icon, show/hide based on section open state."
                                            x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" style="display: none;">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-0" x-show="open" style="display: none;">
                                <div class="space-y-4">



                                    @foreach ($platformOptions as $key => $platform)
                                        <div class="flex items-center">
                                            <input id="filter-platform-{{ $key }}" name="platforms[]"
                                                value="{{ $key }}" type="checkbox"
                                                wire:model.live="platforms"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-platform-{{ $key }}"
                                                class="cursor-pointer ml-3 text-sm text-gray-600">
                                                {{ $platform }}</label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>

                        <div x-data="{ open: true }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Type</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5"
                                            x-description="Expand icon, show/hide based on section open state."
                                            x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5"
                                            x-description="Collapse icon, show/hide based on section open state."
                                            x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" style="display: none;">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-2" x-show="open" style="display: none;">
                                <div class="space-y-4">



                                    @foreach (['work', 'play'] as $key => $type)
                                        <div class="flex items-center">
                                            <input id="filter-type-{{ $type }}" name="types[]"
                                                value="{{ $type }}" type="checkbox" wire:model.live="types"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-type-{{ $type }}"
                                                class="cursor-pointer ml-3 px-3 py-1 text-xs text-white rounded {{ $type == 'work' ? 'bg-blue-400' : 'bg-indigo-400' }}">
                                                {{ $type }}</label>


                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                        <div x-data="{ open: true }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Tags</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5"
                                            x-description="Expand icon, show/hide based on section open state."
                                            x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5"
                                            x-description="Collapse icon, show/hide based on section open state."
                                            x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" style="display: none;">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-0" x-show="open" style="display: none;">
                                <div class="space-y-4">



                                    @foreach ($tagOptions as $key => $tag)
                                        <div class="flex items-center">
                                            <input id="filter-tag-{{ $tag->id }}" name="tags[]"
                                                value="{{ $tag->id }}" type="checkbox" wire:model.live="tags"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-tag-{{ $tag->id }}"
                                                class="cursor-pointer ml-3 text-sm text-gray-600">
                                                {{ $tag->name }}</label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                        @if (1 == 2)

                            <div x-data="{ open: false }" class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <button type="button" x-description="Expand/collapse section button"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-1" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span class="font-medium text-gray-900">Type</span>
                                        <span class="ml-6 flex items-center">
                                            <svg class="h-5 w-5"
                                                x-description="Expand icon, show/hide based on section open state."
                                                x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                                </path>
                                            </svg>
                                            <svg class="h-5 w-5"
                                                x-description="Collapse icon, show/hide based on section open state."
                                                x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true" style="display: none;">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </h3>

                                <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                    id="filter-section-1" x-show="open" style="display: none;">
                                    <div class="space-y-4">


                                        @foreach (['work', 'play'] as $key => $type)
                                            <div class="flex items-center">
                                                <input id="filter-type-{{ $type }}" name="types[]"
                                                    value="{{ $type }}" type="checkbox"
                                                    wire:model.live="types"
                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-type-{{ $type }}"
                                                    class="ml-3 text-sm text-gray-600">
                                                    {{ $type }}</label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div x-data="{ open: false }" class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <button type="button" x-description="Expand/collapse section button"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-2" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span class="font-medium text-gray-900">Size</span>
                                        <span class="ml-6 flex items-center">
                                            <svg class="h-5 w-5"
                                                x-description="Expand icon, show/hide based on section open state."
                                                x-show="!(open)" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                                </path>
                                            </svg>
                                            <svg class="h-5 w-5"
                                                x-description="Collapse icon, show/hide based on section open state."
                                                x-show="open" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true" style="display: none;">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                    id="filter-section-2" x-show="open" style="display: none;">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-size-0" name="size[]" value="2l" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-0" class="ml-3 text-sm text-gray-600">2L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-1" name="size[]" value="6l" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-1" class="ml-3 text-sm text-gray-600">6L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-2" name="size[]" value="12l" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-2" class="ml-3 text-sm text-gray-600">12L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-3" name="size[]" value="18l" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-3" class="ml-3 text-sm text-gray-600">18L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-4" name="size[]" value="20l" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-4" class="ml-3 text-sm text-gray-600">20L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-5" name="size[]" value="40l" type="checkbox"
                                                checked=""
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-5" class="ml-3 text-sm text-gray-600">40L</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endif

                    </form>

                    <!-- Product grid -->
                    <div class="lg:col-span-3">

                        @if ($prompts)



                            <ul role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">


                                @foreach ($prompts as $key => $prompt)
                                    <li
                                        class="overflow-hidden rounded-xl border border-gray-200 hover:shadow transition-shadow">
                                        <a href="{{ route('prompts.show', $prompt->slug) }}" class="">
                                            <div
                                                class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6 relative">

                                                <div class="text-sm font-medium leading-6 text-gray-900">
                                                    {{ $prompt->title }}</div>

                                                <div
                                                    class="absolute right-0 top-0 p-3 text-xs text-white rounded-bl-lg {{ $prompt->type == 'work' ? 'bg-blue-400' : 'bg-indigo-400' }}">
                                                    {{ $prompt->type }}
                                                </div>

                                            </div>
                                            <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
                                                <div class="flex justify-center gap-x-4 py-3">
                                                    <dd class="flex items-start justify-center gap-x-2 text-gray-500">

                                                        @php
                                                            $platformLogoAssetName = '';

                                                            switch ($prompt->platform) {
                                                                case 'ChatGPT':
                                                                    $platformLogoAssetName = 'chat-gpt.png';
                                                                    break;
                                                                case 'Midjourney':
                                                                    $platformLogoAssetName = 'mid-journey.png';
                                                                    break;
                                                                case 'Dall-E':
                                                                    $platformLogoAssetName = 'dalle.png';
                                                                    break;
                                                                case 'adobe-firefly':
                                                                    $platformLogoAssetName = 'adobe-firefly.png';
                                                                    break;
                                                                default:
                                                                    $platformLogoAssetName = 'chat-gpt.png';
                                                                    break;
                                                            }
                                                        @endphp

                                                        <img src="{{ asset('assets/images/ai-platforms/' . $platformLogoAssetName) }}"
                                                            alt="{{ $prompt->platform }}" class="block w-24">
                                                    </dd>
                                                </div>
                                                <div class="flex justify-between gap-x-4 py-3">
                                                    <dd class="flex items-start gap-x-2 text-gray-500 text-sm">
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
            </section>
        </main>
    </div>



</div>
