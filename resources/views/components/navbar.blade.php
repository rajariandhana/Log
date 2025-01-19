<nav x-data="{open:false}">
    <div @click="open=false" x-show="open" class="bg-black w-full h-full opacity-20 fixed top-0 z-10">
    </div>
    <div class="bottom-6 fixed z-30 w-full justify-center flex text-white">
        <svg @click="open=true" x-show="!open" class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
        </svg>
        <svg @click="open=false" x-show="open" class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
        </svg>

    </div>
    <div :class="{'translate-y-[20%]':open, 'translate-y-[90%]':!open}"
        class="z-20 fixed top-0 rounded-t-2xl items-center justify-center flex w-full h-full text-white bg-gray-900 shadow-lg transform transition-transform duration-300 ease-in-out translate-y-full
        "
        >

        {{-- <button @click="open=true" class="text-xl bg-red-50 top-4 fixed">OPEN</button>
        <button @click="open=false" class="text-xl bg-red-50 top-12 fixed">CLOSE</button> --}}

    </div>
    {{-- <div @click="open = !open" tabindex="0" @keydown.enter="open = !open" @keyup.escape="open = false" aria-controls="panel-1" :aria-expanded="open" id="panel-1"
    class="w-50% p-2 bg-green-200 transition-transform-600ms"
    :class="open && 'translate-right-100%'">
    <strong>Click me, and I will move.</strong> Click me again, and I will return to my original position.
    </div> --}}
    {{-- <div x-data="{ activated: false }">
        <div
          @click="activated = !activated"
          tabindex="0"
          @keydown.enter="activated = !activated"
          aria-controls="panel-1"
          :aria-expanded="activated"
          @keyup.escape="activated = false"
          id="panel-1"
          class="w-50% p-2 bg-green-200 transition-transform-600ms"
          :class="activated && 'translate-right-100%'"
        >
          <strong>Click me, and I will move.</strong> Click me again, and I will return to my original position.
        </div>
      </div> --}}
    {{-- <a class="flex flex-col items-center {{request()->is('/') ? 'text-indigo-500':'text-zinc-500'}}" href="/">
        <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
        </svg>
        <span>Home</span>
    </a>
    <a class="flex flex-col items-center {{request()->is('history') ? 'text-indigo-500':'text-zinc-500'}}" href="/history">
        <svg class="w-8 h-8ia-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
        </svg>
        <span>History</span>
    </a>
    <a class="flex flex-col items-center {{request()->is('categories') ? 'text-indigo-500':'text-zinc-500'}}" href="/categories">
        <svg class="w-8 h-8 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11 9h6m-6 3h6m-6 3h6M6.996 9h.01m-.01 3h.01m-.01 3h.01M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
        </svg>
        <span>Category</span>
    </a>
    <a class="flex flex-col items-center {{request()->is('presets') ? 'text-indigo-500':'text-zinc-500'}}" href="/presets">
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 4v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2m6-16v2m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v10m6-16v10m0 0a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m0 0v2"/>
        </svg>
        <span>Preset</span>
    </a> --}}
</nav>
