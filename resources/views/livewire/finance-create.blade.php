<form wire:submit='Store' class="base" >
    @csrf
    
    <div class="flex">
        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md">
            $
        </span>
        <input type="number" wire:model='amount_dolar'
            class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 w-2/3 p-2.5">
        <input type="number" wire:model='amount_cent'
            class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 w-1/3 p-2.5">
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
    <div x-data="{open:false}">
        <div class="flex justify-between w-full h-10 bg-red-50">
            {{-- <select wire:model='finance_category_id'
                class="bg-gray-200 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Categories</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select> --}}
            <select wire:model="finance_category_id" class="bg-gray-50 w-3/4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 y-600">
                <option value="" selected>Categories</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <button @click="open = !open"
             class="h-10 w-fit btn-primary">
                X
            </button>
        </div>
        <div x-show="open" class="flex flex-col w-full h-40 gap-y-2">
            <input type="textarea" wire:model='description_1' placeholder="Description..."
                class="mt-2 rounded-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 w-full p-2.5">
            <input type="textarea" wire:model='description_2' placeholder="More description..."
                class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 w-full p-2.5">
            <input wire:model="date" type="date"
            class="rounded-none bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 w-full p-2.5" >
        </div>
    </div>
    @error('date')
        <span class="error">{{ $message }}</span>
    @enderror
    @error('finance_category_id')
        <span class="error">{{ $message }}</span>
    @enderror
    
    <button type="submit" class="btn-primary">SUBMIT</button>
    @dump(App\Models\FinanceLog::all())
</form>
