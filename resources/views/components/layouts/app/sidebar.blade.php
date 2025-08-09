<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>

    <body class="min-h-screen bg-white dark:bg-zinc-800">
    <div class="w-64 float-right fixed top-0 right-0 z-0">
        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:radio value="light" icon="sun"></flux:radio>
            <flux:radio selected value="dark" icon="moon"></flux:radio>
            <flux:radio value="system" icon="computer-desktop"></flux:radio>
        </flux:radio.group>
    </div>
        <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-16 lg:py-0">
            <div class="lg:flex lg:justify-between lg:gap-4">
                <header class="lg:sticky lg:top-0 lg:flex lg:top-0 lg:max-h-screen lg:w-1/3 lg:flex-col lg:justify-between lg:py-24">
                    <div>
                        <h1 class="text-4xl font-bold tracking-tight sm:text-5xl dark:text-slate-300 text-slate-600"><a href="/">Kevin Wilson</a></h1>
                        <h2 class="mt-3 text-lg font-medium tracking-tight dark:text-slate-50 text-slate-600" sm:text-xl ">Multi disciplined IT Professional</h2>
                        <p class="mt-4 max-w-xs leading-normal">A passion for IT.</p>
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
                            </ul>
                        </nav>
                        <ul class="ml-1 mt-12 flex items-center" aria-label="Social media">
                            <li class="list-none mr-5 shrink-0 text-xs">
                                <a class="block hover:text-slate-200" href="https://github.com/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)" title="GitHub"><span class="[&>svg]:h-5 [&>svg]:w-5">
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
                                <a class="block hover:text-slate-200" href="https://github.com/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)" title="GitHub"><span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#0077b5]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                        d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                                    </svg>
                                    </span><span class="sr-only">LinkedIn</span>
                                </a>
                            </li>

                            <li class="list-none mr-5 shrink-0 text-xs">
                                <a class="block hover:text-slate-200" href="https://github.com/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)" title="GitHub"><span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#1877f2]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                    </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>
                <main id="content" class="py-12 lg:pt-24 lg:w-2/3">
                    <section id="about" class="mb-16 scroll-mt-16 md:mb-16 lg:mb-12 lg:scroll-mt-24" aria-label="About me">
                        <h3 class="text-2xl font-bold py-4 dark:text-slate-300 text-slate-600">About me</h3>
                        <div class="text-slate-300">
                            <p>I'm a versatile, multi-disciplined IT professional with a genuine passion for technology and a strong interest in coding and scripting. My career has given me hands-on experience across technical support, systems administration, networking, and web development, allowing me to approach challenges with both breadth and depth.</p>
                            <p class="mt-4">Starting from 1st line and progressing through to 3rd line support, I've consistently helped users and businesses stay productive by resolving technical issues efficiently and empathetically. I’ve also improved workflows through automation and scripting, using tools like PowerShell and Python, and by developing custom applications tailored to specific needs</p>
                            <p class="mt-4">My background includes working confidently across both Windows Server and Linux environments, managing hybrid infrastructures, and supporting enterprise tools such as Office 365 and Active Directory. I bring a developer’s mindset to IT operations, having built web applications using PHP with Laravel, JavaScript, MySQL, MSSQL, and Python. I’ve also configured and secured networks using Cisco technologies and other vendor solutions, ensuring robust and reliable connectivity.</p>
                            <p class="mt-4">Recently, I completed a 12-week instructor-led training course focused on building scalable solutions on AWS, and I’m currently preparing to earn the AWS Certified Cloud Practitioner certification. This experience has deepened my understanding of cloud architecture and expanded my ability to deliver modern, scalable solutions.</p>
                            <p class="mt-4">Whether it's automating workflows, optimizing performance, or troubleshooting complex systems, I thrive on solving problems and making technology work smarter. I approach every challenge with curiosity, creativity, and a commitment to continuous improvement.</p>
                        </div>
                    </section>

                    <section id="experience" class="mb-16 scroll-mt-4 md:mb-4 lg:mb-12 lg:scroll-mt-4" aria-label="experience">
                        <h3 class="text-2xl font-bold mb-4 dark:text-slate-300 text-slate-600">Experience</h3>
                        <ul>
                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">June 2025 - Sept 2025</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">AWS Cloud Practitioner Intern, Primed Talent</div>
                                        <div class="text-slate-300 mt-4">A 12 week inructor led training course leading to an AWS Certified Clour Practitioner certificate. Covering the AWS eco system including EC2, VPC, Databases, Amazon RDS, Python, Lambada and some Dev ops and conatiner services</div>
                                    </div>
                                </div>
                            </li>

                             <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">July 2025 - April 2025</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">Group Facilitator, Neraf</div>
                                        <div class="text-slate-300 mt-4">Non IT role</div>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">April 2021 - Jan 2023</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">Systems Administrator, EC Outsourcing</div>
                                        <div class="text-slate-300 mt-4">
                                            <p>I designed and deployed the full IT infrastructure for an 800-seat call centre, delivering a secure and scalable environment. The network was built using Cisco Meraki switches and a WatchGuard firewall, with VLANs configured for efficient traffic segmentation. I set up three Hyper-V hosts running Windows and Linux servers, supporting services like Active Directory, File and Print, Microsoft Deployment Server, IIS, MSSQL, and Laravel-based PHP applications.
                                            </p>
                                            <p>
                                                All systems were backed up using Veeam backup and replication for reliable data protection and recovery. I also provided end-to-end support across all levels, ensuring smooth operations and rapid issue resolution. This project demonstrated my ability to build and maintain enterprise-grade infrastructure from the ground up.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">March 2020 - June 2022</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">IT Engineer , Proctor & Gamble</div>
                                        <div class="text-slate-300 mt-4">As the onsite engineer in a three-person team, I provided end-to-end technical support across all levels of the site. I served as the primary point of contact for onsite IT needs, delivering prompt and effective troubleshooting for Office 365, SAP, internal business applications, and hardware-related issues. Working within an ITIL-aligned framework, I used ServiceNow to manage incidents, service requests, and change controls, ensuring consistent service delivery and adherence to best practices. My role focused on rapid issue resolution, maintaining high service standards, and minimizing disruption to daily operations.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">November 2018 - January 2020</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">IT Engineer, Npower</div>
                                        <div class="text-slate-300 mt-4"><p>As the onsite engineer in a three-person team, I delivered comprehensive IT support across all levels of the organization. My responsibilities included hands-on troubleshooting and user assistance for Office 365, SAP, internal business applications, and hardware issues. I also managed operating system and application deployments using SCCM, ensuring smooth rollouts and minimal disruption. Working within an ITIL-aligned environment and leveraging ServiceNow, I maintained high service standards and provided reliable, responsive support tailored to business needs.</p>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">Sept 2018 - Nov 2018</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">IT Engineer (contract), Compter Center</div>
                                        <div class="text-slate-300 mt-4"> completed a three-month contract supporting a Windows 10 rollout project. My key responsibilities included migrating user profiles using the User State Migration Tool (USMT) and deploying operating systems across multiple devices. I ensured a smooth transition with minimal disruption to end users, maintaining continuity and performance throughout the upgrade process.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">Oct 2017 - March 2018</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">IT Support Engineer(contract), NHS</div>
                                        <div class="text-slate-300 mt-4">I was involved in a Windows 7 rollout project focused on imaging PCs for doctors' surgeries. While onsite, I was responsible for migrating user profiles, reinstalling essential applications, and, when required, migrating application data to ensure continuity. The role demanded attention to detail and adaptability to meet the specific needs of each surgery with minimal disruption to daily operations.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">March 2014 - March 2017</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">IT Technician\Service Desk Analyst, Parmley Graham LTD</div>
                                        <div class="text-slate-300 mt-4">During my time with Parmley Graham, I provided infrastructure and desktop support across the organization, ensuring reliable performance and swift issue resolution. I played a key role in a full desktop and laptop refresh initiative, overseeing hardware upgrades and system deployments. In addition to general user support, I assisted with ERP and CRM systems, contributing to smooth business operations. My responsibilities primarily involved supporting Windows servers and desktops, managing antivirus protection through Trend Micro, and developing PowerShell scripts to automate routine tasks and improve efficiency</div>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-12">
                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="text-slate-300">November 2013 - January 2014</div>
                                    </div>
                                    <div class="w-2/3">
                                        <div class="font-bold text-lg text-white">IT Technician, SCS LTD</div>
                                        <div class="text-slate-300 mt-4">While at SCS, I was primarily involved in rebuilding and imaging Windows desktops as part of a large-scale refresh project. This included wiping and reconfiguring systems, applying standardized images, and ensuring each device met company specifications before deployment.</div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </section>

                    <section id="projects" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="projects">
                        <h3 class="text-2xl font-bold dark:text-slate-300 text-slate-600">Coding Projects</h3>
                        <h4 class="text-1xl text-left my-4 font-bold dark:text-slate-300 text-slate-600">Website / Web Application Development</h4>
                        <div class="mt-8">
                            <a href="https://claires-recipes.uk" target="_blank" aria-label="claires recipes">
                                <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
                                    <div class="flex flex-col lg:flex-row">
                                        <div class="md:pr-8">
                                            <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/claires-recipes.PNG') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div>
                                            <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-300 text-slate-600">Claires Recipes</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
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
                                        <div class="md:pr-8">
                                            <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/aws_dashboard.PNG') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div>
                                            <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-300 text-slate-600">AWS Cost Dashboard</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
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
                                            <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/kb.PNG') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div>
                                            <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-300 text-slate-600">Knowledge Base</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
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
                            <a href="https://danska-property.uk" target="_blank" aria-label="danska property">
                                <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
                                    <div class="flex flex-col lg:flex-row">
                                        <div class="pr-8">
                                            <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/danska.PNG') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div>
                                            <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-300 text-slate-600">Danska Property Services</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
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
                                            <img class="max-w-64 w-64 h-48 max-h-64 py-4 md:py-0" src="{{ asset('storage/claires-recipes.PNG') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div>
                                            <h3 class="md:py-4 lg:p-2 text-xl dark:text-slate-300 text-slate-600">ITIL Helpdesk Software</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
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

                        <h4 class="text-1xl text-left my-4 font-bold dark:text-slate-300 text-slate-600">Powershell Scripting</h4>
                            <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
                                <div x-data class="flex">
                                        <div class="pr-8">
                                            <img class="h-32 w-128" src="{{ asset('storage/PowerShell.webp') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
                                            <h3 class="pb-2 text-xl dark:text-slate-300 text-slate-600">Modify Active Directory Phone Numbers</h3>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
                                            <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
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
                                                            @include('components.code_snippets.phone')
                                                            </code>
                                                    </pre>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
                                <div x-data class="flex">
                                        <div class="pr-8">
                                            <img class="h-32 w-128" src="{{ asset('storage/PowerShell.webp') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
                                            <h3 class="pb-2 text-xl dark:text-slate-300 text-slate-600">HTML Server Reports</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
                                            <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
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
                                                <div class="model-inner w-96 md:w-128 mt-2 bg-white text-black overflow-auto">
                                                    <div class="modal-header">

                                                        <button aria-label="Close" x-on:click="isModalOpen=false">✖</button>
                                                    </div>
                                                    <pre class="language-powershell">
                                                        <code>

                                                                @include('components.code_snippets.server')

                                                        </code>
                                                    </pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md w-full">
                                <div x-data class="flex">
                                        <div class="pr-8">
                                            <img class="h-32 w-128" src="{{ asset('storage/PowerShell.webp') }}" alt="powershell">
                                        </div>
                                        <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
                                            <h3 class="pb-2 text-xl dark:text-slate-300 text-slate-600">Get Software Uninstall String From the Registry</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
                                            <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
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
                                                <div class="model-inner w-96 md:w-128 mt-2 bg-white text-black overflow-auto">
                                                    <div class="modal-header">

                                                        <button aria-label="Close" x-on:click="isModalOpen=false">✖</button>
                                                    </div>
                                                    <pre>
                                                        <code class="language-powershell">

                                                                @include('components.code_snippets.uninstall')

                                                        </code>
                                                    </pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                            </div>

                           <h4 class="text-1xl text-left my-4 font-bold dark:text-slate-300 text-slate-600">Python</h4>
                            <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
                                <div x-data class="flex">
                                        <div class="pr-8">
                                            <img class="h-32 w-128" src="{{ asset('storage/python.jpeg') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
                                            <h3 class="pb-2 text-xl dark:text-slate-300 text-slate-600">Modify Active Directory Phone Numbers</h3>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
                                            <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
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
                                                            @include('components.code_snippets.phone')
                                                            </code>
                                                    </pre>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md">
                                <div x-data class="flex">
                                        <div class="pr-8">
                                            <img class="h-32 w-128" src="{{ asset('storage/python.jpeg') }}" alt="claires-recipes.uk">
                                        </div>
                                        <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
                                            <h3 class="pb-2 text-xl dark:text-slate-300 text-slate-600">HTML Server Reports</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
                                            <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
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
                                                <div class="model-inner w-96 md:w-128 mt-2 bg-white text-black overflow-auto">
                                                    <div class="modal-header">

                                                        <button aria-label="Close" x-on:click="isModalOpen=false">✖</button>
                                                    </div>
                                                    <pre class="language-powershell">
                                                        <code>

                                                                @include('components.code_snippets.server')

                                                        </code>
                                                    </pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <div class="dark:hover:bg-zinc-600 p-4 hover:rounded-md w-full">
                                <div x-data class="flex">
                                        <div class="pr-8">
                                            <img class="h-32 w-128" src="{{ asset('storage/python.jpeg') }}" alt="powershell">
                                        </div>
                                        <div x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
                                            <h3 class="pb-2 text-xl dark:text-slate-300 text-slate-600">Get Software Uninstall String From the Registry</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quos voluptatem architecto aut incidunt omnis voluptate consequatur numquam odio ipsum, nemo totam, ratione impedit cum molestiae debitis et, laboriosam magnam?</p>
                                            <button x-on:click="isModalOpen = true" class="cursor-pointer hover:bg-zinc-900 bg-zinc-700 mt-2 mr-1 rounded-xl text-white text-xs font-bold py-1 px-2 rounded">
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
                                                <div class="model-inner w-96 md:w-128 mt-2 bg-white text-black overflow-auto">
                                                    <div class="modal-header">

                                                        <button aria-label="Close" x-on:click="isModalOpen=false">✖</button>
                                                    </div>
                                                    <pre>
                                                        <code class="language-powershell">

                                                                @include('components.code_snippets.uninstall')

                                                        </code>
                                                    </pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                            </div>

                        </section>
                </main>
            </div>
        </div>

        <script src="https:///prismjs@v1.x/components/prism-core.min.js"></script>
        <script src="https:///prismjs@v1.x/plugins/autoloader/prism-autoloader.min.js"></script>
        @fluxScripts
    </body>
</html>
