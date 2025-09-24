<x-layouts.app
    :title="__('Coding Projects - Kevin Wilson Portfolio')"
    :description="__('Discover Kevin Wilson\'s coding projects including AWS Cost Dashboard, Recipe websites, Knowledge Base applications, and PowerShell automation scripts. Built with Laravel, PHP, JavaScript, and Python.')"
    :keywords="__('Kevin Wilson Projects, Coding Portfolio, AWS Dashboard, Web Development, Laravel Projects, PowerShell Scripts, Python Automation, PHP Applications')"
>
<section id="projects" class="mb-8 md:mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="Projects" tabindex="-1">
<div class="relative">
    <h2 class="text-3xl font-bold dark:text-white text-slate-800 py-2 md:py-4">
        <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Coding Projects</span>
    </h2>
</div>
<h3 class="text-xl text-left my-4 md:my-6 font-semibold dark:text-slate-200 text-slate-700 relative">
    <span class="relative z-10">Website / Web Application Development</span>
    <div class="absolute bottom-0 left-0 w-12 h-0.5 bg-gradient-to-r from-blue-400 to-transparent"></div>
</h3>

<div class="mt-8 space-y-8">
    <a href="https://aws.klw-design.co.uk" target="_blank" rel="nofollow" aria-label="AWS Dashboard" class="group block">
        <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-zinc-800/50 to-zinc-900/50 border border-zinc-700/50 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 backdrop-blur-sm">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative p-6 lg:p-8">
                <div class="flex flex-col lg:flex-row lg:items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="relative overflow-hidden rounded-lg group">
                            <img class="w-64 h-48 object-cover transition-transform duration-300 group-hover:scale-105" src="{{ asset('storage/AWS_Dashboard.PNG') }}" alt="Screenshot of AWS Cost Dashboard">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                    <div class="flex-1 space-y-4">
                        <h3 class="text-2xl font-bold dark:text-white text-slate-800 group-hover:text-blue-400 transition-colors duration-300">AWS Cost Dashboard</h3>
                        <p class="dark:text-slate-300 text-slate-600 leading-relaxed">As part of my interest and ongoing training in AWS, this personal project showcases my evolving proficiency with the platform. It provides real-time cost metrics for all AWS services used within my account, retrieved directly via AWS APIs. The data is presented through a streamlined dashboard that alternates between tables and charts for easy visualization. The front end was built using TailwindCSS and AlpineJS, ensuring a responsive and modern user experience.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-gradient-to-r from-orange-500 to-red-500 text-white text-xs font-semibold py-2 px-3 rounded-full">HTML</span>
                            <span class="bg-gradient-to-r from-green-500 to-teal-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Alpine JS</span>
                            <span class="bg-gradient-to-r from-blue-500 to-cyan-500 text-white text-xs font-semibold py-2 px-3 rounded-full">TailwindCSS</span>
                            <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-xs font-semibold py-2 px-3 rounded-full">AWS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>

<div class="mt-8">
    <a target="_blank" href="https://kb-nologin.klw-design.co.uk" aria-label="knowledge base" rel="nofollow" class="group block">
        <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-zinc-800/50 to-zinc-900/50 border border-zinc-700/50 hover:border-purple-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-purple-500/10 backdrop-blur-sm">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative p-6 lg:p-8">
                <div class="flex flex-col lg:flex-row lg:items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="relative overflow-hidden rounded-lg group">
                            <img class="w-64 h-48 object-cover transition-transform duration-300 group-hover:scale-105" src="{{ asset('storage/kb.PNG') }}" alt="Screenshot of Knowledge Base application">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                    <div class="flex-1 space-y-4">
                        <h3 class="text-2xl font-bold dark:text-white text-slate-800 group-hover:text-purple-400 transition-colors duration-300">Knowledge Base</h3>
                        <p class="dark:text-slate-300 text-slate-600 leading-relaxed">This project was developed during my time at Procter & Gamble and became a widely used tool within our local team. It served as an internal IT knowledge base, featuring SQL full-text search across all articles stored in the database. The platform also included an administrative section, allowing designated admins to review, approve, or reject submitted articles. The tech stack for this project consisted of Laravel, Vue.js, tailwindCSS, and MySQL. This version is readonly and with no login</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white text-xs font-semibold py-2 px-3 rounded-full">PHP</span>
                            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Laravel</span>
                            <span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white text-xs font-semibold py-2 px-3 rounded-full">VueJS</span>
                            <span class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Bootstrap CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="mt-8">
    <a href="https://bnb.klw-deign.co.uk" target="_blank" aria-label="Seaham Coastal Retreats" rel="nofollow" class="group block">
        <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-zinc-800/50 to-zinc-900/50 border border-zinc-700/50 hover:border-green-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-green-500/10 backdrop-blur-sm">
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative p-6 lg:p-8">
                <div class="flex flex-col lg:flex-row lg:items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="relative overflow-hidden rounded-lg group">
                            <img class="w-64 h-48 object-cover transition-transform duration-300 group-hover:scale-105" src="{{ asset('storage/seaham.PNG') }}" alt="Screenshot of Claire's Recipes website">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                    <div class="flex-1 space-y-4">
                        <h3 class="text-2xl font-bold dark:text-white text-slate-800 group-hover:text-green-indigo-400 transition-colors duration-300">Seaham Coastal Retreats</h3>
                        <p class="dark:text-slate-300 text-slate-600 leading-relaxed">This project was developed at the request of a Client, with the direction of Showcasing rental airbnb style properties in Seaham County Durham. It includes an array of features including an admin section plus online booking and payment via stripe.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white text-xs font-semibold py-2 px-3 rounded-full">PHP</span>
                            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Laravel</span>
                            <span class="bg-gradient-to-r from-blue-500 to-purple-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Livewire</span>
                            <span class="bg-gradient-to-r from-green-500 to-teal-500 text-white text-xs font-semibold py-2 px-3 rounded-full">AlpineJS</span>
                            <span class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Bootstrap CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="mt-8">
    <a href="https://claires-recipes.uk" target="_blank" aria-label="claires recipes" rel="nofollow" class="group block">
        <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-zinc-800/50 to-zinc-900/50 border border-zinc-700/50 hover:border-green-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-green-500/10 backdrop-blur-sm">
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative p-6 lg:p-8">
                <div class="flex flex-col lg:flex-row lg:items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="relative overflow-hidden rounded-lg group">
                            <img class="w-64 h-48 object-cover transition-transform duration-300 group-hover:scale-105" src="{{ asset('storage/claires-recipes.PNG') }}" alt="Screenshot of Claire's Recipes website">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                    <div class="flex-1 space-y-4">
                        <h3 class="text-2xl font-bold dark:text-white text-slate-800 group-hover:text-green-400 transition-colors duration-300">Claire's Recipes</h3>
                        <p class="dark:text-slate-300 text-slate-600 leading-relaxed">This project was developed at the request of a friend who wanted to launch a food and recipe blog. Over the course of several months, I built the platform using Laravel, Livewire, Bootstrap, JavaScript, and MySQL. The site is fully SEO-compliant and offers a range of features, including the ability for users to upload recipes. Once a recipe is submitted, the system automatically extracts the ingredients and queries a nutritional API to generate detailed nutritional information. In addition to the recipe functionality, the site includes a members-only section and a blog for sharing updates and engaging with the community.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white text-xs font-semibold py-2 px-3 rounded-full">PHP</span>
                            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Laravel</span>
                            <span class="bg-gradient-to-r from-blue-500 to-purple-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Livewire</span>
                            <span class="bg-gradient-to-r from-green-500 to-teal-500 text-white text-xs font-semibold py-2 px-3 rounded-full">AlpineJS</span>
                            <span class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Bootstrap CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


<div class="mt-8">
    <a href="https://kb.kevinlwilson.co.uk" target="_blank" aria-label="ITIL Helpdesk Software" rel="nofollow" class="group block">
        <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-zinc-800/50 to-zinc-900/50 border border-zinc-700/50 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 backdrop-blur-sm">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative p-6 lg:p-8">
                <div class="flex flex-col lg:flex-row lg:items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="relative overflow-hidden rounded-lg group">
                            <img class="w-64 h-48 object-cover transition-transform duration-300 group-hover:scale-105" src="{{ asset('storage/help.jpeg') }}" alt="Screenshot of ITIL Helpdesk Software">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                    <div class="flex-1 space-y-4">
                        <h3 class="text-2xl font-bold dark:text-white text-slate-800 group-hover:text-blue-400 transition-colors duration-300">ITIL Helpdesk Software</h3>
                        <p class="dark:text-slate-300 text-slate-600 leading-relaxed">This project was developed to design ITIL-compliant ticketing software. It allows users to submit incidents on IT issues, with tickets assigned either automatically to agents or manually by administrators. The system also includes an integrated API-driven knowledge base, which can be shared with users via email links or accessed directly by support agents. Real-time browser notifications are enabled through WebSockets, enhancing responsiveness and user engagement. The tech stack for this project includes Laravel, Livewire, MySQL, TailwindCSS, and JavaScript.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white text-xs font-semibold py-2 px-3 rounded-full">PHP</span>
                            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Laravel</span>
                            <span class="bg-gradient-to-r from-blue-500 to-purple-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Livewire</span>
                            <span class="bg-gradient-to-r from-green-500 to-teal-500 text-white text-xs font-semibold py-2 px-3 rounded-full">AlpineJS</span>
                            <span class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-xs font-semibold py-2 px-3 rounded-full">Tailwind CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<h3 class="text-2xl text-left my-4 font-bold dark:text-slate-300 text-slate-600">Scripting</h3>
<div class="w-full my-4"><img class="h-32 md:min-w-48 md:hidden" src="{{ asset('storage/PowerShell.webp') }}" alt="PowerShell logo"></div>


    <livewire:code-snippets-list />



</div>

</section>
</x-layouts.app>
