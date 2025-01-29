<div class="flex flex-col gap-y-2">
    {{-- In work, do what you enjoy. --}}
    {{-- @dump($logs) --}}
    @isset($log)
        <div class="fixed top-0 z-30 w-full h-full bg-black opacity-20 -ml-4">
        </div>
        <div class="fixed top-0 left-0 z-30 w-full h-full flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] max-w-md">
                @livewire('finance-update',['log'=>$log])
                <button wire:click='Close' class="btn-primary-alt">
                    CLOSE
                </button>
            </div>

        </div>
    @endisset
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
                    <td class="text-xl text-indigo-500">${{ $log->amount_dolar }},{{$log->amount_cent ?? '00'}}</td>
                    <td class="">
                        <span class="bg-{{$log->category->color}}-500 px-2 py-1 rounded">
                            {{ $log->category->name }}
                        </span>
                    </td>
                    <td>
                        <button wire:click='Edit({{$log}})'>
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
