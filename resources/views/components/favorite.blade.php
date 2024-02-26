<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center md:text-left">
        <h2 class="mb-12 text-center text-3xl font-bold">My Favorites</h2>
        @if(count($favorites) === 0)
            <p>You didn't like any news yet !!!</p>
        @endif
        <div class="flex flex-wrap -mx-3">
            @foreach($favorites as $favorite)
                <div class="w-full sm:w-1/2 md:w-1/3 px-3 mb-6">
                    <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/018.jpg" class="w-full" alt="Louvre" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]"></div>
                        </a>
                    </div>
                    <div class="flex flex-wrap justify-center gap-6">
                        <h5 class="mb-3 text-lg font-bold">{{ $favorite->title }}</h5>
                        <p class="mb-3 text-sm text-neutral-500 dark:text-neutral-300">{{ \Illuminate\Support\Str::limit($favorite->description, 100, $end='...') }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                        </svg>
                    </div>
                    <div class="mb-3 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500 md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="mr-2 h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                        </svg>
                        Travels
                    </div>
                    <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                        <small>Published <u>{{ $favorite->date }}</u></small>
                    </p>

                    <div class="flex flex-wrap justify-center gap-6">
                        <a href="/news/{{ $favorite->id }}" class="relative">
                            <span class="absolute top-0 left-0 mt-1 ml-1 h-full w-full rounded bg-gray-700"></span>
                            <span class="fold-bold relative inline-block h-full w-full rounded border-2 border-black bg-black px-3 py-1 text-base font-bold text-white transition duration-100 hover:bg-gray-900 hover:text-yellow-500 dark:bg-black">Read More</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Section: Design Block -->
</div>
