<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>

    <body body x-data="{darkMode: true}" :class="{'dark': darkMode === true }"  class="antialiased min-h-screen bg-white dark:bg-zinc-800">
        <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-16 lg:py-0">
            <div class="lg:flex lg:justify-between lg:gap-4">
                <header class="lg:sticky lg:top-0 lg:flex lg:top-0 lg:max-h-screen lg:w-1/3 lg:flex-col lg:justify-between lg:py-24" role="banner">
                    <div>
                        <h1 class="text-4xl font-bold tracking-tight sm:text-5xl dark:text-slate-300 text-slate-600"><a href="/" aria-label="Home - Kevin Wilson">Kevin Wilson</a></h1>
                        <p class="mt-3 text-lg font-medium tracking-tight dark:text-slate-50 text-slate-600" sm:text-xl id="subtitle">Multi disciplined IT Professional</p>
                        <p class="mt-4 max-w-xs leading-normal dark:text-slate-300 text-slate-600">A passion for IT.</p>
                        <nav class="nav" aria-label="Main site navigation">
                            <ul class="mt-16 w-max">
                                <li>
                                    <a class="group flex items-center py-3 transition-colors duration-200  dark:hover:bg-zinc-800 rounded-lg" href="{{route('about')}}" aria-current="page" wire:navigate>
                                        <span class="nav-indicator mr-4 h-px w-8 bg-slate-600 dark:bg-slate-400 transition-all group-hover:w-16 group-hover:bg-slate-200 dark:group-hover:bg-slate-100 group-focus-visible:w-16 group-focus-visible:bg-slate-200 dark:group-focus-visible:bg-slate-100 motion-reduce:transition-none"></span>
                                        <span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-300 group-hover:text-slate-700 dark:group-hover:text-white group-focus-visible:text-slate-700 dark:group-focus-visible:text-white">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group flex items-center py-3 active transition-colors duration-200 dark:hover:bg-zinc-800 rounded-lg" href="{{route('experience')}}" wire:navigate>
                                        <span class="nav-indicator mr-4 h-px w-8 bg-slate-600 dark:bg-slate-400 transition-all group-hover:w-16 group-hover:bg-slate-200 dark:group-hover:bg-slate-100 group-focus-visible:w-16 group-focus-visible:bg-slate-200 dark:group-focus-visible:bg-slate-100 motion-reduce:transition-none"></span>
                                        <span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-300 group-hover:text-slate-700 dark:group-hover:text-white group-focus-visible:text-slate-700 dark:group-focus-visible:text-white">Experience</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group flex items-center py-3 transition-colors duration-200  dark:hover:bg-zinc-800 rounded-lg" href="{{route('projects')}}" wire:navigate>
                                        <span class="nav-indicator mr-4 h-px w-8 bg-slate-600 dark:bg-slate-400 transition-all group-hover:w-16 group-hover:bg-slate-200 dark:group-hover:bg-slate-100 group-focus-visible:w-16 group-focus-visible:bg-slate-200 dark:group-focus-visible:bg-slate-100 motion-reduce:transition-none"></span>
                                        <span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-300 group-hover:text-slate-700 dark:group-hover:text-white group-focus-visible:text-slate-700 dark:group-focus-visible:text-white">Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group flex items-center py-3 transition-colors duration-200  dark:hover:bg-zinc-800 rounded-lg" href="{{ route('blog.index') }}" wire:navigate>
                                        <span class="nav-indicator mr-4 h-px w-8 bg-slate-600 dark:bg-slate-400 transition-all group-hover:w-16 group-hover:bg-slate-200 dark:group-hover:bg-slate-100 group-focus-visible:w-16 group-focus-visible:bg-slate-200 dark:group-focus-visible:bg-slate-100 motion-reduce:transition-none"></span>
                                        <span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-300 group-hover:text-slate-700 dark:group-hover:text-white group-focus-visible:text-slate-700 dark:group-focus-visible:text-white">Blog</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <ul class="ml-1 mt-12 flex items-center" aria-label="Social media links">
                            <li class="list-none mr-5 shrink-0 text-xs">
                                <a class="block hover:text-slate-200" href="https://github.com/sammytron612" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)" title="GitHub"><span class="[&>svg]:h-5 [&>svg]:w-5">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 496 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                    </svg>
                                    </span><span class="sr-only">GitHub</span>
                                </a>
                            </li>

                            <li class="list-none mr-5 shrink-0 text-xs">
                                <a class="block hover:text-slate-200" href="https://www.linkedin.com/in/kevin-wilson-2b878b252/" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn (opens in a new tab)" title="LinkedIn"><span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#0077b5]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                        d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                                    </svg>
                                    </span><span class="sr-only">LinkedIn</span>
                                </a>
                            </li>

                            <li class="list-none mr-5 shrink-0 text-xs">
                                <a class="block hover:text-slate-200" href="https://github.com/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="Facebook (opens in a new tab)" title="Facebook"><span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#1877f2]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                    </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <button @click="darkMode=!darkMode" type="button" class="ml-8 mt-4 relative inline-flex flex-shrink-0 h-6 mr-5 transition-colors duration-200 ease-in-out border-2 border-transparent rounded-full cursor-pointer bg-zinc-200 dark:bg-zinc-700 w-11 focus:outline-none focus:ring-2 focus:ring-neutral-700 focus:ring-offset-2" role="switch" aria-checked="false">
                            <span class="sr-only">Use setting</span>
                            <span class="relative inline-block w-5 h-5 transition duration-500 ease-in-out transform translate-x-0 bg-white rounded-full shadow pointer-events-none dark:translate-x-5 ring-0">
                                <span class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-500 ease-in opacity-100 dark:opacity-0 dark:duration-100 dark:ease-out" aria-hidden="true">
                                    {{--
                                    <x-svg class="w-4 h-4 text-neutral-700" svg="sun"/>
                                    --}}
                                    <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun w-4 h-4 text-neutral-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                </span>
                                <span class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-100 ease-out opacity-0 dark:opacity-100 dark:duration-200 dark:ease-in" aria-hidden="true">
                                    {{--
                                    <x-svg class="w-4 h-4 text-neutral-700" svg="moon"/>
                                    --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon w-4 h-4 text-neutral-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                                    </svg>
                                </span>
                            </span>
                        </button>

                    </div>
                </header>
                <main id="content" class="py-12 lg:pt-24 lg:w-2/3" role="main">
                    {{$slot}}
                </main>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
