<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-gray-700 pt-9 sm:pt-10">
    @include('includes.header')
    <main id="content">

        <section class="py-20">
            <section class="py-20">
                <div class="max-w-7xl mx-auto px-5 sm:px-10 md:px-12 lg:px-5 space-y-16">
                    <div class="relative flex flex-col">
                        <div
                            class="p-6 w-full mx-auto max-w-4xl md:p-10 rounded-2xl bg-white dark:bg-gray-950 border border-gray-100/10 dark:border-gray-900 shadow-2xl shadow-gray-700/40 dark:shadow-none flex flex-col items-center justify-center text-center space-y-6 md:space-y-8">
                            <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" alt="Author avatar"
                            width="1200" height="400" class="rounded-[7px] w-full aspect-video object-cover">
                            <div class="space-y-2 text-center flex-1">
                                <h2 class="text-xl font-semibold leading-none text-gray-800 dark:text-gray-200">
                                    Title
                                </h2>
                                <p class="text-sky-700 dark:text-sky-300">
                                    Categorie
                                </p>
                            </div>
                            <p class="font-medium text-gray-700 dark:text-gray-300 max-w-md">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum at ipsa pariatur culpa iste dolore
                                aliquid officia modi quas vel inventore animi, error commodi distinctio eum accusamus?
                                Accusantium, tempora quisquam!
                            </p>
                            <div class="flex">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                </svg>
                            </button>
                        </div>
                        </div>
                       

                    </div>
                </div>
            </section>


            <div class="max-w-7xl mx-auto px-5 sm:px-10 md:px-12 lg:px-5 space-y-14">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-950 border border-gray-100 dark:border-gray-900 px-px rounded-xl">
                        <div class="rounded-[11px] bg-gray-200 dark:bg-gray-800 relative">
                            <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" alt="article cover"
                                width="1400" class="rounded-[7px] w-full aspect-video object-cover">
                            <div
                                class="absolute -bottom-8 z-10 flex inset-x-2 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-2 text-center">
                                <div class="flex items-center gap-x-4 justify-center">
                                    <!-- Add justify-center here if you want to center the whole block -->
                                    <div class="text-center">
                                        <!-- Add text-center here to center text within this div -->
                                        <p class="text-gray-800 dark:text-gray-50 font-semibold">By John Doe</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">
                                            Web Designer
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mt-14 px-5 pb-5 space-y-4 ">
                            <span class="text-blue-600 dark:text-blue-400  text-sm">June-10-2023</span>
                            <p class="text-gray-700 dark:text-gray-300 line-clamp-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium temporibus
                                debitis
                            </p>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-950 border border-gray-100 dark:border-gray-900 px-px rounded-xl">
                        <div class="rounded-[11px] bg-gray-200 dark:bg-gray-800 relative">
                            <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" alt="article cover"
                                width="1400" class="rounded-[7px] w-full aspect-video object-cover">
                            <div
                                class="absolute -bottom-8 z-10 flex inset-x-2 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-2 text-center">
                                <div class="flex items-center gap-x-4 justify-center">
                                    <!-- Add justify-center here if you want to center the whole block -->
                                    <div class="text-center">
                                        <!-- Add text-center here to center text within this div -->
                                        <p class="text-gray-800 dark:text-gray-50 font-semibold">Title</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">
                                            Categories
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mt-14 px-5 pb-5 space-y-4 ">
                            <span class="text-blue-600 dark:text-blue-400  text-sm">June-10-2023</span>
                            <p class="text-gray-700 dark:text-gray-300 line-clamp-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium temporibus
                                debitis
                            </p>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-950 border border-gray-100 dark:border-gray-900 px-px rounded-xl">
                        <div class="rounded-[11px] bg-gray-200 dark:bg-gray-800 relative">
                            <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" alt="article cover"
                                width="1400" class="rounded-[7px] w-full aspect-video object-cover">
                            <div
                                class="absolute -bottom-8 z-10 flex inset-x-2 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-2 text-center">
                                <div class="flex items-center gap-x-4 justify-center">
                                    <!-- Add justify-center here if you want to center the whole block -->
                                    <div class="text-center">
                                        <!-- Add text-center here to center text within this div -->
                                        <p class="text-gray-800 dark:text-gray-50 font-semibold">By John Doe</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">
                                            Web Designer
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mt-14 px-5 pb-5 space-y-4 ">
                            <span class="text-blue-600 dark:text-blue-400  text-sm">June-10-2023</span>
                            <p class="text-gray-700 dark:text-gray-300 line-clamp-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium temporibus
                                debitis
                            </p>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message"
                                    width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        < <footer class="bg-black text-gray-400">
            @include('includes.footer')
            </footer>

            <!--Vendor js-->
            <script src="src/vendors/hc-sticky/dist/hc-sticky.js"></script>
            <script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script>
            <script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
            <script src="src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js"></script>

            <!-- Start development js -->
            <script src="src/js/theme.js"></script>
            <!-- End development js -->
</body>

</html>
