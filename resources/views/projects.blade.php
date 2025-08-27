<x-layouts.app :title="__('Projects')">
<section id="projects" class="mb-8 md:mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="Projects" tabindex="-1">
<h2 class="text-2xl font-bold dark:text-slate-300 text-slate-600 py-2 md:py-4 sticky top-0 bg-white dark:bg-zinc-800 z-10">Coding Projects</h2>
<h3 class="text-1xl text-left my-2 md:my-4 font-bold dark:text-slate-300 text-slate-600">Website / Web Application Development</h3>

<div class="mt-8">
    <a href="https://aws-dash.kevinlwilson.co.uk" target="_blank" aria-label="AWS Dashboard">
        <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
            <div class="flex flex-col lg:flex-row">
                <div class="md:pr-8">
                    <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/AWS_Dashboard.PNG') }}" alt="Screenshot of AWS Cost Dashboard">
                </div>
                <div>
                    <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-50 text-slate-600">AWS Cost Dashboard</h3>
                    <p class="dark:text-slate-300 text-slate-600">As part of my interest and ongoing training in AWS, this personal project showcases my evolving proficiency with the platform. It provides real-time cost metrics for all AWS services used within my account, retrieved directly via AWS APIs. The data is presented through a streamlined dashboard that alternates between tables and charts for easy visualization. The front end was built using TailwindCSS and AlpineJS, ensuring a responsive and modern user experience.</p>
                    <div class="flex mt-4">
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            HTML
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Alpine JS
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            TailwindCSS
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            AWS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="mt-8">
    <a href="https://claires-recipes.uk" target="_blank" aria-label="claires recipes">
        <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
            <div class="flex flex-col lg:flex-row">
                <div class="md:pr-8">
                    <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/claires-recipes.PNG') }}" alt="Screenshot of Claire's Recipes website">
                </div>
                <div>
                    <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-50 text-slate-600">Claire's Recipes</h3>
                    <p class="dark:text-slate-300 text-slate-600">This project was developed at the request of a friend who wanted to launch a food and recipe blog. Over the course of several months, I built the platform using Laravel, Livewire, Bootstrap, JavaScript, and MySQL. The site is fully SEO-compliant and offers a range of features, including the ability for users to upload recipes. Once a recipe is submitted, the system automatically extracts the ingredients and queries a nutritional API to generate detailed nutritional information. In addition to the recipe functionality, the site includes a members-only section and a blog for sharing updates and engaging with the community.</p>
                    <div class="flex mt-4">
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            PHP
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Laravel
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Livewire
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            AlpineJS
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Bootstrap CSS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="mt-8">
    <a target="_blank" href="https://kevkb.kevinlwilson.co.uk" aria-label="knowledge base">
        <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
            <div class="flex flex-col lg:flex-row">
                <div class="md:pr-8">
                    <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/kb.PNG') }}" alt="Screenshot of Knowledge Base application">
                </div>
                <div>
                    <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-50 text-slate-600">Knowledge Base</h3>
                    <p class="dark:text-slate-300 text-slate-600">This project was developed during my time at Procter & Gamble and became a widely used tool within our local team. It served as an internal IT knowledge base, featuring SQL full-text search across all articles stored in the database. The platform also included an administrative section, allowing designated admins to review, approve, or reject submitted articles. The tech stack for this project consisted of Laravel, Vue.js, Bootstrap, and MySQL.</p>
                    <div class="flex mt-4">
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            PHP
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Laravel
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            VueJS
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Bootstrap CSS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="mt-8">
    <a href="https://danska.kevinlwilson.co.uk" target="_blank" aria-label="danska property">
        <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
            <div class="flex flex-col lg:flex-row">
                <div class="pr-8">
                    <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/danska.PNG') }}" alt="Screenshot of Danska Property Services prototype">
                </div>
                <div>
                    <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-300 text-slate-50">Danska Property Services</h3>
                    <p class="dark:text-slate-300 text-slate-600">This project was created as a personal exercise to enhance my front-end design skills and deepen my understanding of SEO best practices. It is a static prototype with no backend functionality and is not currently live. The design was built using Bootstrap and AlpineJS, focusing on clean layout structure, responsive design, and optimized markup for search engine visibility.</p>
                    <div class="flex mt-4">
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            PHP
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Laravel
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Livewire
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            AlpineJS
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Bootstrap CSS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="mt-8">
    <a href="https://claires-recipes.uk" target="_blank" aria-label="claires recipes">
        <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
            <div class="flex flex-col lg:flex-row">
                <div class="pr-8">
                    <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/help.jpeg') }}" alt="Screenshot of ITIL Helpdesk Software">
                </div>
                <div>
                    <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-50 text-slate-600">ITIL Helpdesk Software</h3>
                    <p class="dark:text-slate-300 text-slate-600">This project was developed to design ITIL-compliant ticketing software. It allows users to submit incidents on IT issues, with tickets assigned either automatically to agents or manually by administrators. The system also includes an integrated API-driven knowledge base, which can be shared with users via email links or accessed directly by support agents. Real-time browser notifications are enabled through WebSockets, enhancing responsiveness and user engagement. The tech stack for this project includes Laravel, Livewire, MySQL, TailwindCSS, and JavaScript.</p>
                    <div class="flex mt-4">
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            PHP
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Laravel
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Livewire
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            AlpineJS
                        </button>
                        <button class="bg-zinc-700 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
                            Tailwind CSS
                        </button>
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
