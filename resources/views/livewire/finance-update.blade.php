<form wire:submit='Update' class="flex flex-col gap-y-2">
    @csrf

    <div class="flex">
        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md">
            $
        </span>
        <input type="number" wire:model='amount_dolar'
            class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 block flex-1 w-2/3 p-2.5">
        <input type="number" wire:model='amount_cent' placeholder="00"
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
            <select wire:model="finance_category_id" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 y-600">
                <option value="" selected>Categories</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col w-full h-40 gap-y-2">
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
    <div class="flex w-full gap-x-2 bg-red-50">
        <button wire:click='Delete' class="btn-danger">DELETE</button>
        <button type="submit" class="btn-primary">UPDATE</button>
    </div>
</form>
