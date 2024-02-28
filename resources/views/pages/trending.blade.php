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
                    <div class="p-6 w-full mx-auto max-w-xl md:p-10 rounded-2xl bg-white dark:bg-gray-950 border border-gray-100/10 dark:border-gray-900 shadow-2xl shadow-gray-700/40 dark:shadow-none flex flex-col items-center justify-center text-center space-y-6 md:space-y-8">
                        <img src="https://api.lorem.space/image/face?w=600&h=400&hash=bart89fe" alt="Author avatar" width="600" height="400" class="rounded-[7px] w-full aspect-video object-cover">
                        <div class="space-y-2 text-center flex-1">
                            <h2 class="text-xl font-semibold leading-none text-gray-800 dark:text-gray-200">
                                {{ $trends[0]->title }}
                            </h2>
                            <p class="text-sky-700 dark:text-sky-300">
                                {{ \App\Models\Category::find($trends[0]->category_id)->category }}
                            </p>
                        </div>
                        <p class="font-medium text-gray-700 dark:text-gray-300 max-w-md">
                            {{ $trends[0]->description }}
                        </p>
                        <div class="flex">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart text-white" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                                <p style="font-size: 10px;" class="text-white">{{ $trends[0]->favorites_count }}</p>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                </svg>
                                <p style="font-size: 10px;" class="text-white">{{ $trends[0]->comments_count }}</p>
                            </button>
                            <a href="{{ $trends[0]->link }}" target="_blank" class="ml-4 inline-flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 2a8 8 0 0 0-8 8c0 2.002.754 3.832 2 5.214V18a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2.786c1.246-1.382 2-3.212 2-5.214a8 8 0 0 0-8-8zm-1 15v-3.786c1.276-1.414 2-3.29 2-5.214a6 6 0 0 0-12 0c0 1.924.724 3.8 2 5.214V17h8zm-2-9a1 1 0 1 1 2 0 1 1 0 0 1-2 0z" clip-rule="evenodd"/>
                                </svg>
                                View
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="max-w-7xl mx-auto px-5 sm:px-10 md:px-12 lg:px-5 space-y-14">
            @if(count($trends) > 1)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach(array_slice($trends, 1) as $trend)
                        <div
                            class="bg-white dark:bg-gray-950 border border-gray-100 dark:border-gray-900 px-px rounded-xl">
                            <div class="rounded-[11px] bg-gray-200 dark:bg-gray-800 relative">
                                <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe"
                                     alt="article cover" width="1400"
                                     class="rounded-[7px] w-full aspect-video object-cover">
                                <div
                                    class="absolute -bottom-8 z-10 flex inset-x-2 rounded-lg bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-2 text-center">
                                    <div class="flex items-center gap-x-4 justify-center">
                                        <div class="text-center">
                                            <p class="text-gray-800 dark:text-gray-50 font-semibold">{{ $trend->date }}</p>
                                            <p>
                                                {{ \App\Models\Category::find($trend->category_id)->category }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-14 px-5 pb-5 space-y-4">
                                <p class="text-sm text-gray-600 dark:text-gray-300">{{ $trend->title }}</p>

                                <span class="text-blue-600 dark:text-blue-400  text-sm"></span>
                                <p class="text-gray-700 dark:text-gray-300 line-clamp-2">
                                    {{ $trend->description }}
                                </p>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-heart text-white" width="25" height="25"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
                                    </svg>
                                    <p style="font-size: 10px;" class="text-white">{{ $trend->favorites_count }}</p>
                                </button>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message"
                                         width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M8 9h8"/>
                                        <path d="M8 13h6"/>
                                        <path
                                            d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"/>
                                    </svg>
                                    <p style="font-size: 10px;" class="text-white">{{ $trend->comments_count }}</p>
                                </button>
                                <a href="{{ $trend->link }}" target="_blank" class="inline-flex items-center justify-center bg-black-500 hover:hover-80 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 2a8 8 0 0 0-8 8c0 2.002.754 3.832 2 5.214V18a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2.786c1.246-1.382 2-3.212 2-5.214a8 8 0 0 0-8-8zm-1 15v-3.786c1.276-1.414 2-3.29 2-5.214a6 6 0 0 0-12 0c0 1.924.724 3.8 2 5.214V17h8zm-2-9a1 1 0 1 1 2 0 1 1 0 0 1-2 0z" clip-rule="evenodd"/>
                                    </svg>
                                    View
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>no trending yet !!!</p>
            @endif
        </div>

    </section>
    <
    <footer class="bg-black text-gray-400">
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
</main>
</body>

</html>
