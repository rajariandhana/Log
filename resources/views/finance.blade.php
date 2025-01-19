<x-layout title="Finance" nav='finance'>
    HALAMAN FINANCE
    <form action="" class="base text-xl">
        @csrf
        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ut voluptatibus accusantium quaerat deserunt laudantium molestiae, facere sunt tempore voluptates. --}}
        <div class="flex">
            <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                $
            </span>
            <input type="number"
                class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full p-2.5">
            <input type="number"
                class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full p-2.5">
            <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-r-md">
                ¢
            </span>
        </div>
        <select id="countries" class="bg-gray-200 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select>
        <button type="submit" class="btn-primary">SUBMIT</button>
    </form>
    <div class="grid grid-cols-2 gap-x-4">
        <x-preset-button></x-preset-button>
        <x-preset-button></x-preset-button>
    </div>
</x-layout>
