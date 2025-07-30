<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">

        <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-16 lg:py-0">
            <div class="lg:flex lg:justify-between lg:gap-4">
                <header class="lg:sticky lg:top-0 lg:flex lg:top-0 lg:max-h-screen lg:w-1/3 lg:flex-col lg:justify-between lg:py-24">
                    <div>
                        <h1 class="text-4xl font-bold tracking-tight text-slate-200 sm:text-5xl"><a href="/">Kevin Wilson</a></h1>
                        <h2 class="mt-3 text-lg font-medium tracking-tight text-slate-200 sm:text-xl">Multi disciplined IT Professional</h2>
                        <p class="mt-4 max-w-xs leading-normal">Blah blah blah blah blah.</p>
                        <nav class="nav hidden lg:block" aria-label="In-page jump links">
                            <ul class="mt-16 w-max">
                                <li>
                                    <a class="group flex items-center py-3" href="#about">
                                        <span class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-slate-200 group-focus-visible:w-16 group-focus-visible:bg-slate-200 motion-reduce:transition-none"></span>
                                        <span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-slate-200 group-focus-visible:text-slate-200">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group flex items-center py-3 active" href="#experience">
                                        <span class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-slate-200 group-focus-visible:w-16 group-focus-visible:bg-slate-200 motion-reduce:transition-none"></span>
                                        <span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-slate-200 group-focus-visible:text-slate-200">Experience</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="group flex items-center py-3" href="#projects">
                                        <span class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-slate-200 group-focus-visible:w-16 group-focus-visible:bg-slate-200 motion-reduce:transition-none"></span>
                                        <span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-slate-200 group-focus-visible:text-slate-200">Projects</span>
                                    </a>
                                </li>
                            </ul
                        </nav>
                    </div>
                </header>
                <main id="content" class="pt-24 lg:w-2/3">
                    <section id="about" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="About me">
                        <h3 class="text-2xl font-bold py-4">About me</h3>
                        <div>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi porro ducimus, amet totam labore error aliquam sed laboriosam magnam? Animi sequi suscipit ratione rerum dicta repellat recusandae accusantium cum ducimus.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint quidem impedit rerum consectetur porro perspiciatis non repellat ea, quos cumque officia mollitia dignissimos provident ducimus perferendis placeat ipsum, ut recusandae!
                        </div>
                    </section>

                    <section id="experience" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="experience">
                        <h3 class="text-2xl font-bold mb-4">Experience</h3>
                        <ul>
                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">June 2012 - April 2014</div>
                                    <div class="w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem veniam perspiciatis explicabo quasi necessitat ibus accusantium vitae eum id repudiandae, ratione at harum fugit, impedit sint quisquam quis, doloremque natus?
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">June 2012 - April 2014</div>
                                    <div class="w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem veniam perspiciatis explicabo quasi necessitat ibus accusantium vitae eum id repudiandae, ratione at harum fugit, impedit sint quisquam quis, doloremque natus?
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">June 2012 - April 2014</div>
                                    <div class="w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem veniam perspiciatis explicabo quasi necessitat ibus accusantium vitae eum id repudiandae, ratione at harum fugit, impedit sint quisquam quis, doloremque natus?
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">June 2012 - April 2014</div>
                                    <div class="w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem veniam perspiciatis explicabo quasi necessitat ibus accusantium vitae eum id repudiandae, ratione at harum fugit, impedit sint quisquam quis, doloremque natus?
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">June 2012 - April 2014</div>
                                    <div class="w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem veniam perspiciatis explicabo quasi necessitat ibus accusantium vitae eum id repudiandae, ratione at harum fugit, impedit sint quisquam quis, doloremque natus?
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">June 2012 - April 2014</div>
                                    <div class="w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem veniam perspiciatis explicabo quasi necessitat ibus accusantium vitae eum id repudiandae, ratione at harum fugit, impedit sint quisquam quis, doloremque natus?
                                    </div>
                                </div>
                            </li>



                        </ul>
                    </section>

                    <section id="experience" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="experience">
                        <h3 class="text-2xl font-bold">Coding Projects</h3>
                        <div class="mt-8">
                            <div>Project 1</div>
                            <div>Project 2</div>
                            <div>Project 2</div>
                            <div>Project 2</div>
                            <div>Project 2</div>
                            <div>Project 2</div>
                        </div>
                    </section>
                </main>
            </div>
        </div>

<flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                    <flux:radio value="light" icon="sun"></flux:radio>
                    <flux:radio value="dark" icon="moon"></flux:radio>
                    <flux:radio value="system" icon="computer-desktop"></flux:radio>
        </flux:radio.group>
        @fluxScripts
    </body>
</html>
