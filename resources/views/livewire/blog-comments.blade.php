
<div x-data="{ showComments: false, showForm: false }" class="my-8 p-6 rounded-lg shadow-lg bg-white dark:bg-zinc-900"
    x-init="window.addEventListener('hide-comment-form', () => { showForm = false })">
    <h3 class="text-2xl font-bold mb-6 text-slate-800 dark:text-slate-100 text-center">Comments</h3>
    <div class="flex flex-col md:flex-row justify-center gap-4 mb-6">
        <button @click="showComments = !showComments" class="hover:cursor-pointer flex items-center gap-2 px-5 py-2 rounded-full bg-slate-600 text-white hover:bg-slate-700 transition shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V10a2 2 0 012-2h2m2-4h4m-4 0a2 2 0 012 2v2m-2-2a2 2 0 00-2 2v2m6-4a2 2 0 00-2 2v2" /></svg>
            <span x-show="showComments">Hide Comments</span>
            <span x-show="!showComments">Show Comments</span>
        </button>
        <button @click="showForm = !showForm" class="hover:cursor-pointer flex items-center gap-2 px-5 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span x-show="showForm">Hide</span>
            <span x-show="!showForm">Add Comment</span>
        </button>
    </div>
    <div x-show="showComments" class="mb-8">
        @forelse($comments as $comment)
            <div class="mb-4 p-4 rounded-lg border border-gray-200 dark:border-zinc-700 bg-gray-50 dark:bg-zinc-800 shadow">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-semibold text-slate-700 dark:text-slate-200">{{ $comment->name }}</span>
                    <span class="text-xs text-gray-500 dark:text-gray-400">{{ $comment->created_at->format('M d, Y H:i') }}</span>
                </div>
                <div class="mt-2 text-gray-700 dark:text-gray-200">{{ $comment->comment }}</div>
            </div>
        @empty
            <div class="text-center text-gray-500 dark:text-gray-400">No comments yet.</div>
        @endforelse
    </div>
    <form x-show="showForm" wire:submit.prevent="submitComment" class="mx-auto max-w-lg bg-gray-50 dark:bg-zinc-800 p-6 rounded-lg shadow space-y-6">
        <div>
            <label for="name" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Name</label>
            <input id="name" type="text" wire:model.defer="name" class="w-full p-3 border border-gray-300 dark:border-zinc-700 rounded-lg dark:bg-zinc-900 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="comment" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">Comment</label>
            <textarea id="comment" wire:model.defer="comment" rows="3" class="w-full p-3 border border-gray-300 dark:border-zinc-700 rounded-lg dark:bg-zinc-900 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            @error('comment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="captcha" class="block mb-2 font-semibold text-slate-700 dark:text-slate-200">What is <span class="font-bold">{{ $captcha_num1 }} + {{ $captcha_num2 }}</span>? <span class="text-xs text-gray-400">(Anti-spam)</span></label>
            <input id="captcha" type="text" wire:model.defer="captcha_answer" class="w-full p-3 border border-gray-300 dark:border-zinc-700 rounded-lg dark:bg-zinc-900 dark:text-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            @error('captcha_answer') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="w-full px-6 py-3 bg-blue-600 hover:cursor-pointer text-white rounded-lg font-semibold hover:bg-blue-700 transition shadow">Add Comment</button>
    </form>
</div>
