<div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md mt-4">
    <div x-data class="flex">
        <div class="pr-8">
            <img class="h-32 md:min-w-48 hidden md:block" src="{{ $image }}" alt="PowerShell logo">
        </div>
        <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
            <h3 class="pb-2 text-xl dark:text-slate-300 text-slate-600">{{$title}}</h3>
            <p class="mb-2">{{$text}}</p>
            <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded" aria-label="Show PowerShell code for modifying Active Directory phone numbers">
                Show Code
            </button>
            <div
            class="modal"
            role="dialog"
            tabindex="-1"
            x-show="isModalOpen"
            x-on:click.away="isModalOpen = false"
            x-cloak
            x-transition
            >
                <div class="model-inner w-96 md:w-128 mt-2 overflow-auto">
                    <div class="modal-header">

                        <button aria-label="Close" x-on:click="isModalOpen=false">✖</button>
                    </div>
                    <pre class="language-powershell">
                            <code>
                                @php $file_name = 'components.code_snippets.' . $snippet @endphp
                                @include($file_name)
                            </code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>
