<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-gray-700 pt-9 sm:pt-10">
        @include('includes.header')

        <section class="py-20">
            <div class="max-w-7xl mx-auto px-5 sm:px-10 md:px-12 lg:px-5 space-y-16">
                <div class="space-y-4 max-w-2xl">
                    <span
                        class="text-blue-600 dark:text-blue-500 font-semibold pl-6 relative before:absolute before:top-1/2 before:left-0 before:w-5 before:h-px before:bg-blue-600 dark:before:bg-blue-500 before:rounded-full">
                        Happy Clients
                    </span>
                    <h1 class="font-bold text-gray-800 dark:text-white text-3xl">Client’s Say About Us</h1>
                </div>
                <div
                    class="relative">
                    <div class="flex md:items-stretch gap-10 lg:gap-14">
                        <div class="hidden md:flex md:w-1/2 lg:w-2/5 md:h-auto">
                            <img src="/images/sidebiew.webp" alt="Author Avatr" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="flex-1 flex flex-col space-y-6 md:space-y-12 lg:space-y-16 md:py-6 lg:py-8 md:h-auto md:justify-center">
                            <p class="text-xl lg:text-2xl font-medium text-gray-700 dark:text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum at ipsa pariatur culpa iste dolore aliquid officia modi quas vel inventore animi, error commodi distinctio eum accusamus? Accusantium, tempora quisquam!
                            </p>
                            <div class="flex items-start gap-4">
                                <img src="/images/sidebiew.webp" alt="Author avatar" class="w-12 h-12 rounded-full flex md:hidden">
                                <div class="space-y-1 flex-1">
                                    <h2 class="text-lg font-semibold leading-none text-gray-800 dark:text-gray-200">
                                        John Doe
                                    </h2>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        SEO Kelasi-AI SARL
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:absolute md:right-0 md:bottom-6 lg:bottom-8 bg-gray-100 dark:bg-gray-900 p-1 rounded-lg flex items-start gap-3 w-max mt-10 md:mt-0">
                        <button aria-label="Prev Button" class="outline-none p-2.5 rounded-md text-gray-700 dark:text-gray-300 transition ease-linear bg-gray-200 dark:bg-gray-800 hover:bg-white dark:hover:bg-gray-950">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M15 10a.75.75 0 01-.75.75H7.612l2.158 1.96a.75.75 0 11-1.04 1.08l-3.5-3.25a.75.75 0 010-1.08l3.5-3.25a.75.75 0 111.04 1.08L7.612 9.25h6.638A.75.75 0 0115 10z" clip-rule="evenodd" />
                            </svg>                          
                        </button>
                        <button aria-label="Next Button" class="outline-none p-2.5 rounded-md text-gray-700 dark:text-gray-300 transition ease-linear bg-gray-200 dark:bg-gray-800 hover:bg-white dark:hover:bg-gray-950">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                            </svg>                                                 
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-5 sm:px-10 md:px-12 lg:px-5 space-y-14">

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-950 border border-gray-100 dark:border-gray-900 px-px rounded-xl">
                        <div class="rounded-[11px] bg-gray-200 dark:bg-gray-800 relative">
                            <img src="/images/sidebiew.webp" alt="article cover" width="1400" class="rounded-[7px] w-full aspect-video object-cover">
                            <div class="absolute -bottom-8 z-10 flex inset-x-2 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-2">
                                <div class="flex items-center gap-x-4">
                                    <img src="/images/sidebiew.webp" alt="" width="800" class="w-10 h-10 object-cover rounded-full">
                                    <div>
                                        <p class="text-gray-800 dark:text-gray-50 font-semibold">By John Doe</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">
                                            Web Designer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-14 px-5 pb-5 space-y-4">
                            <span class="text-blue-600 dark:text-blue-400 text-sm">June-10-2023</span>
                            <h1 class="text-gray-900 dark:text-white text-xl font-semibold">
                                How to deploy your JS fullstack app using Vercel and Railway
                            </h1>
                            <p class="text-gray-700 dark:text-gray-300 line-clamp-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium temporibus debitis 
                            </p>
                            <a href="#" class="flex items-center gap-x-2 text-blue-600 dark:text-blue-400">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-950 border border-gray-100 dark:border-gray-900 px-px rounded-xl">
                        <div class="rounded-[11px] bg-gray-200 dark:bg-gray-800 relative">
                            <img src="/images/sidebiew.webp" alt="article cover" width="1400" class="rounded-[7px] w-full aspect-video object-cover">
                            <div class="absolute -bottom-8 z-10 flex inset-x-2 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-2">
                                <div class="flex items-center gap-x-4">
                                    <img src="/images/sidebiew.webp" alt="" width="800" class="w-10 h-10 object-cover rounded-full">
                                    <div>
                                        <p class="text-gray-800 dark:text-gray-50 font-semibold">By John Doe</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">
                                            Web Designer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-14 px-5 pb-5 space-y-4">
                            <span class="text-blue-600 dark:text-blue-400 text-sm">June-10-2023</span>
                            <h1 class="text-gray-900 dark:text-white text-xl font-semibold">
                                How to deploy your JS fullstack app using Vercel and Railway
                            </h1>
                            <p class="text-gray-700 dark:text-gray-300 line-clamp-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium temporibus debitis 
                            </p>
                            <a href="#" class="flex items-center gap-x-2 text-blue-600 dark:text-blue-400">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-950 border border-gray-100 dark:border-gray-900 px-px rounded-xl">
                        <div class="rounded-[11px] bg-gray-200 dark:bg-gray-800 relative">
                            <img src="/images/sidebiew.webp" alt="article cover" width="1400" class="rounded-[7px] w-full aspect-video object-cover">
                            <div class="absolute -bottom-8 z-10 flex inset-x-2 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-2">
                                <div class="flex items-center gap-x-4">
                                    <img src="/images/sidebiew.webp" alt="" width="800" class="w-10 h-10 object-cover rounded-full">
                                    <div>
                                        <p class="text-gray-800 dark:text-gray-50 font-semibold">By John Doe</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">
                                            Web Designer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-14 px-5 pb-5 space-y-4">
                            <span class="text-blue-600 dark:text-blue-400 text-sm">June-10-2023</span>
                            <h1 class="text-gray-900 dark:text-white text-xl font-semibold">
                                How to deploy your JS fullstack app using Vercel and Railway
                            </h1>
                            <p class="text-gray-700 dark:text-gray-300 line-clamp-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium temporibus debitis 
                            </p>
                            <a href="#" class="flex items-center gap-x-2 text-blue-600 dark:text-blue-400">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </section>