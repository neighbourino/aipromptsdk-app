 <div class="">


     @if ($submitted)
         <div class="px-3 py-1 border border-white mt-3 rounded">
             <p class="text-white py-3 inline-block">Tak! Vi ser frem til at lægge fine ting i din indbakke.</p>
         </div>
     @else
         <form wire:submit="save" class="mt-6 flex max-w-md gap-x-4">

             <div class="w-2/3">
                 <div>
                     <label for="email-address" class="sr-only">E-mail</label>
                     <input id="email-address" name="email" type="email" autocomplete="email" wire:model="email"
                         class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 w-full"
                         placeholder="Indtast din e-mail">
                 </div>

                 @error('email')
                     <span class="error text-red-400 text-xs py-3 inline-block">{{ $message }}</span>
                 @enderror
             </div>

             <div>
                 <button type="submit"
                     class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Tilmeld
                     mig</button>
             </div>
         </form>
     @endif

 </div>
