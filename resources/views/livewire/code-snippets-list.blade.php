<div>
    @forelse($snippets as $snippet)
    <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md mt-4">
        <div x-data class="flex">
            <div class="pr-8">
                @if($snippet->type === 'Powershell')
                <img class="h-32 md:min-w-48 hidden md:block" src="{{ asset('storage/PowerShell.webp') }}" alt="{{$snippet->type}} logo">
                @else
                <img class="h-32 md:min-w-48 hidden md:block" src="{{ asset('storage/python.jpeg') }}" alt="{{$snippet->type}} logo">
                @endif
            </div>
            <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
                <h3 class="pb-2 text-xl dark:text-slate-50 text-slate-600">{{$snippet->title}}</h3>

                <P class="dark:text-slate-300 text-slate-600 mb-2">{{ $snippet->text }}</p>
                <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded" aria-label="{{ $snippet->text }}">
                    Show Code
                </button>
                <div
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                    role="dialog"
                    tabindex="-1"
                    x-show="isModalOpen"
                    x-on:click.away="isModalOpen = false"
                    x-cloak
                    x-transition
                >
                    <div @click.away="isModalOpen = false" class="bg-white dark:bg-zinc-900 rounded-xl shadow-lg w-96 md:w-128 max-h-[80vh] overflow-auto p-6 relative">
                        <div class="modal-header flex justify-end">
                            <button aria-label="Close" x-on:click="isModalOpen=false" class="text-xl text-gray-500 dark:text-gray-300 hover:text-red-500">✖</button>
                        </div>
                        <div class="bg-zinc-800 text-green-200 p-4 rounded overflow-x-auto text-sm my-2">{!! $snippet->code !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
        <div class="col-span-full text-gray-500 dark:text-gray-400">No code snippets found.</div>
    @endforelse


</div>
