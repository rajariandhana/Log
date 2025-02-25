<x-layout title="Finance" nav='finance'>
    <h1 class="text-xl text-center font-bold">FINANCE</h1>
    {{-- @livewire('finance-create') --}}
    {{-- <div class="grid grid-cols-2 gap-x-4">
        <x-preset-button></x-preset-button>
        <x-preset-button></x-preset-button>
    </div> --}}
    <div x-data="{page:'create'}">
        {{-- <button @click="page = 'create'">CREATE</button> --}}
        <div x-transition x-show="page === 'create'" x-transition:leave.duration.0ms class="">
            @livewire('finance-create')
        </div>
        <div x-transition x-show="page === 'logs'" x-transition:leave.duration.0ms class="">
            @livewire('finance-logs')
        </div>
        <div x-transition x-show="page === 'categories'" x-transition:leave.duration.0ms class="">CATEGORIES</div>

        <ul class="fixed bottom-20 z-30 justify-center w-full h-20 flex items-center gap-x-2">
            <li>
                <input type="radio" id="create" name="create" value="create" x-model="page" value="create" class="hidden peer" />
                <label for="create" class="btn-primary-alt peer-checked:btn-primary">
                    New
                </label>
            </li>
            <li>
                <input type="radio" id="logs" name="logs" value="logs" x-model="page" value="logs" class="hidden peer">
                <label for="logs" class="btn-primary-alt peer-checked:btn-primary">
                    Logs
                </label>
            </li>
            <li>
                <input type="radio" id="categories" name="categories" value="categories" x-model="page" value="categories" class="hidden peer">
                <label for="categories" class="btn-primary-alt peer-checked:btn-primary">
                    Settings
                </label>
            </li>
        </ul>
</div>


  </x-layout>
