<form x-data="{success:$wire.entangle('success')}" wire:submit.prevent='Store' class="base">
    @csrf
    <div class="flex">
        <span
            class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md">
            $
        </span>
        <input type="number" wire:model='amount_dolar'
            class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 block flex-1 w-2/3 p-2.5">
        <input type="number" wire:model='amount_cent' placeholder="00"
            class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 block flex-1 w-1/3 p-2.5">
        <span
            class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-r-md">
            ¢
        </span>
    </div>
    @error('amount_dolar')
        <span class="error">{{ $message }}</span>
    @enderror
    @error('amount_cent')
        <span class="error">{{ $message }}</span>
    @enderror
    <div x-data="{ open: false }">
        <div class="flex justify-between w-full h-10">
            <select wire:model="finance_category_id"
                class="bg-gray-50 w-3/4 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 y-600">
                <option value="" selected>Select Categories...</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <button type="button" @click="open = !open" class="h-10 w-fit btn-primary items-center justify-center flex">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                </svg>
            </button>
        </div>
        <div x-show="open" x-transition class="flex flex-col w-full h-40 gap-y-2">
            <input type="textarea" wire:model='description_1' placeholder="Description..."
                class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 flex-1 w-full p-2.5 rounded-md">
            <input type="textarea" wire:model='description_2' placeholder="More description..."
                class="bg-gray-50 border border-gray-300 text-gray-900 flex-1 w-full p-2.5 rounded-md">
            <input wire:model="date" type="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 flex-1 w-full p-2.5 rounded-md">
        </div>
    </div>
    @error('date')
        <span class="error">{{ $message }}</span>
    @enderror
    @error('finance_category_id')
        <span class="error">{{ $message }}</span>
    @enderror

    <button type="submit" class="btn-primary">CREATE</button>
    {{-- @isset($success)
        <span class="btn-success-alt transition-all">{{$success}}</span>
    @endisset --}}
    {{-- @if(session('success')) --}}
        <span @click="success=false" x-show="success" x-transition class="btn-success-alt flex w-full justify-between items-center transition-all">
            Log Created
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                </svg>
        </span>
    {{-- @endif --}}
    {{-- @dump(App\Models\FinanceLog::all()) --}}
</form>
