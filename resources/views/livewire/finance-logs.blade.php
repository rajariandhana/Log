<div x-data="{ open: false }" class="flex flex-col gap-y-2">
    {{-- In work, do what you enjoy. --}}
    {{-- @dump($logs) --}}
    <div x-show="open" x-transition class="fixed top-0 left-0 z-30 w-full h-full flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] max-w-md">
            {{-- @livewire('finance-update',['log'=>$log]) --}}
            <form wire:submit class="flex flex-col gap-y-2">
                @csrf

                <div class="flex">
                    <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md">
                        $
                    </span>
                    <input type="number" wire:model.blur='amount_dolar'
                        class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 block flex-1 w-2/3 p-2.5">
                    <input type="number" wire:model.blur='amount_cent' placeholder="00"
                        class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 block flex-1 w-1/3 p-2.5">
                    <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-r-md">
                        ¢
                    </span>
                </div>
                @error('amount_dolar')
                    <span class="error">{{ $message }}</span>
                @enderror
                @error('amount_cent')
                    <span class="error">{{ $message }}</span>
                @enderror
                <div>
                    <div class="flex justify-between w-full h-10 bg-red-50">
                        <select wire:model.blur="finance_category_id" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 y-600">
                            <option value="" selected>Select Categories...</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col w-full h-40 gap-y-2">
                        <input type="textarea" wire:model.blur='description_1' placeholder="Description..."
                            class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 flex-1 w-full p-2.5 rounded-md">
                        <input type="textarea" wire:model.blur='description_2' placeholder="More description..."
                            class="bg-gray-50 border border-gray-300 text-gray-900 flex-1 w-full p-2.5 rounded-md">
                        <input wire:model.blur="date" type="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 flex-1 w-full p-2.5 rounded-md">
                    </div>
                </div>
                @error('date')
                    <span class="error">{{ $message }}</span>
                @enderror
                @error('finance_category_id')
                    <span class="error">{{ $message }}</span>
                @enderror
                <div class="flex w-full justify-end gap-x-2 mt-2">
                    <button wire:click='Delete' class="btn-danger-alt w-fit mb-0 py-2">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                    </button>
                    {{-- <button type="submit" class="btn-primary">UPDATE</button> --}}
                    <button wire:click='Close' @click="open = false" class="btn-primary-alt w-fit mb-0 py-2">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                            </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr class="flex justify-between items-center bg-white px-4 py-1 h-16 w-full rounded-lg shadow-lg text-sm mb-2">
                    <td class="">{{ $log->date }}</td>
                    <td class="w-12 text-xl text-indigo-500">${{ $log->amount_dolar }},{{$log->amount_cent ?? '00'}}</td>
                    <td class="w-12">
                        <span class="bg-{{$log->category->color}}-500 px-2 py-1 rounded">
                            {{ $log->category->name }}
                        </span>
                    </td>
                    <td class="w-6">
                        <button wire:click='Edit({{$log}})' @click="open = true">
                            <svg class="w-6 h-6 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4h4m0 0v4m0-4-5 5M8 20H4m0 0v-4m0 4 5-5"/>
                                </svg>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="fixed bottom-20">
        {{ $logs->links() }}
    </div>
</div>
