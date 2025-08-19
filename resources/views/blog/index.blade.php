<x-layouts.app :title="__('Blog')">

<div class="container mx-auto py-12 bg-white dark:bg-zinc-800">
    <h1 class="text-4xl font-bold mb-6 text-slate-700 dark:text-slate-200">Blog</h1>
    <p class="mb-4 text-lg text-gray-700 dark:text-gray-300">Welcome to the blog!</p>
    <main class="mb-4 text-lg text-gray-700 dark:text-gray-300">
        @if($blog)
            <div class="mb-8 p-6 rounded shadow bg-gray-50 dark:bg-zinc-900 mt-4">
                <h2 class="text-2xl font-bold mb-2 text-slate-800 dark:text-slate-100">{{ $blog->blog_title ?? 'Untitled' }}</h2>
                <div class="mb-2 text-sm text-gray-500 dark:text-gray-400">By {{ $blog->user->name }} | {{ $blog->created_at->format('M d, Y') }}</div>
                <div class="text-base text-gray-700 dark:text-gray-200">{!! $blog->blog_text !!}</div>
                <livewire:blog-comments :blogId="$blog->id" />
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-4">
                @if($prevBlog)
                    <div class="mb-2 md:mb-0 text-center">
                        <div class="text-gray-500 dark:text-gray-400 text-center">Previous</div>
                        <div class="my-2"><strong>{{ $prevBlog->blog_title ?? 'Untitled' }}</strong></div>
                        <a href="{{ route('blog.index', ['blog_id' => $prevBlog->id]) }}" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 transition" wire:navigate>Previous</a>
                    </div>
                @endif
                @if($nextBlog)
                    <div class="text-center">
                        <div class="text-gray-500 dark:text-gray-400 text-center">Up Next</div>
                        <div class="my-2"><strong>{{ $nextBlog->blog_title ?? 'Untitled' }}</strong></div>
                        <a href="{{ route('blog.index', ['blog_id' => $nextBlog->id]) }}" class="px-4 rounded-xl py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition" wire:navigate>Next</a>
                    </div>
                @endif
            </div>
        @else
            <div class="text-center text-gray-500 dark:text-gray-400">No blog articles found.</div>
        @endif
    </main>
</div>
</x-layouts.app>
