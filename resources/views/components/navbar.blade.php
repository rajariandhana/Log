<nav x-data="{open:false}" class="text-white">
    <div @click="open=false" x-show="open" class="bg-black w-full h-full opacity-20 fixed top-0 z-10">
    </div>
    <div class="bottom-6 fixed z-30 text-center w-full justify-center flex">
        <svg @click="open=true" x-show="!open" class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
        </svg>
        <svg @click="open=false" x-show="open" class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
        </svg>
    </div>
    <div :class="{'translate-y-[50%]':open, 'translate-y-[90%]':!open}"
        class="z-20 fixed top-0 p-12 rounded-t-2xl justify-center w-full h-full bg-gray-900 shadow-lg transform transition-transform duration-300 ease-in-out
        "
        >
        <ul class="space-y-2 flex-col" x-show="open">

        @switch($nav)
            @case('finance')
                <x-navlink rn="finance" name="Finance"></x-navlink>
                <x-navlink rn="finance.categories" name="Categories"></x-navlink>
                <x-navlink rn="finance.presets" name="Presets"></x-navlink>
                @break

            @default
            <x-navlink rn="finance" name="Finance"></x-navlink>
            <x-navlink rn="exercise" name="Exercise"></x-navlink>
            <x-navlink rn="book" name="Book"></x-navlink>
            <x-navlink rn="movie" name="Movie"></x-navlink>
            <x-navlink rn="series" name="Series"></x-navlink>
            <li class="w-full px-4 py-2 text-xl text-center text-red-500 bg-red-300 border-[2px] border-red-500 rounded-md shadow-md">
                <form action="{{route('logout')}}">
                    @csrf
                    <button type="submit">LOGOUT</button>
                </form>
            </li>
        @endswitch
        @if ($nav!='home')
            <x-navlink rn="home" name="Home"></x-navlink>
        @endif
        </ul>
        {{-- <button @click="open=true" class="text-xl bg-red-50 top-4 fixed">OPEN</button>
        <button @click="open=false" class="text-xl bg-red-50 top-12 fixed">CLOSE</button> --}}

    </div>
</nav>
