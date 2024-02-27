<a href="/" class="bg-black border border-gray-200 rounded-lg ml-4 p-2 shadow-2xl hover:opacity-70 text-white">HOME</a>
<div class="bg-white">

    <div class="mb-5 px-4 sm:px-10">
        <div class="max-w-7xl w-full mx-auto">
            <div class="grid lg:grid-cols-2 items-center gap-10">
                <div class="mt-10">

                </div>
            </div>
        </div>
    </div>
    <div class="px-4 sm:px-10">
        <div class="max-w-7xl w-full mx-auto">
            <div class="grid md:grid-cols-2 items-center gap-10">
                <div class="w-full mt-5"> <!-- Added mt-5 here -->
                    <img src="https://readymadeui.com/team-image.webp" alt="Premium Benefits"
                         class="w-full h-full object-cover"/>
                </div>

                <div class="relative flex items-center justify-center antialiased bg-white bg-gray-100 min-w-screen">
                   <livewire:comments-section :comments="$comments" :news="$news"/>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="px-4 sm:px-10 mt-5">
    <div class="max-w-7xl w-full mx-auto">
        <div class="grid md:grid-cols-2 items-center gap-10">
            <div class="flex justify-between">
                <div class="flex flex-col justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="like-btn h-10 w-10 border-1 text-gray-300 hover:text-gray-200 transition duration-100 cursor-pointer"
                         viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                              clip-rule="evenodd"/>
                    </svg>
                    <p style="font-size: 12px;" id="likes-count"></p>
                </div>

                <div class="justify-center flex items-center">
                    <p class="text-sm text-gray-400 mr-5">view sourse </p>
                    <a href="{{ $news['link'] }}" target="_blank" rel="noopener noreferrer"
                       class="inline-block p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd"
                                  d="M4.34 10a5.97 5.97 0 000 0A7.98 7.98 0 0010 14a7.98 7.98 0 005.66-2 5.97 5.97 0 000-4A5.97 5.97 0 0010 6a5.97 5.97 0 00-5.66 4zm2.83-.53a4 4 0 017.5 0 3.97 3.97 0 01-7.5 0zM10 3a9.96 9.96 0 00-7 2.75A9.96 9.96 0 001 10c0 1.57.36 3.08 1 4.43a9.96 9.96 0 003 3.82c1.35.64 2.86 1 4.43 1s3.08-.36 4.43-1a9.96 9.96 0 003-3.82c.64-1.35 1-2.86 1-4.43 0-2.76-1.06-5.27-2.75-7A9.96 9.96 0 0010 3zm0 11c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>


            </div>


        </div>
    </div>
</div>


<div class="px-4 sm:px-10 mt-28">
    <div class="max-w-7xl mx-auto">
        <hr>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16">
            <div class="cursor-pointer rounded overflow-hidden group">
                <div>
                    <span class="block text-gray-400 mb-2">10 FEB 2023</span>
                    <h3 class="text-xl font-extrabold group-hover:text-blue-500 transition-all">A Guide to Igniting
                        Your Imagination</h3>
                    <div class="mt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                            nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                    </div>
                </div>
                <hr class="my-6"/>
                <div class="flex flex-wrap items-center gap-3">
                    <img src='https://readymadeui.com/team-1.webp' class="w-9 h-9 rounded-full"/>
                    <p class="text-xs">BY JOHN DOE</p>
                </div>
            </div>
            <div class="cursor-pointer rounded overflow-hidden group">
                <div>
                    <span class="block text-gray-400 mb-2">7 JUN 2023</span>
                    <h3 class="text-xl font-extrabold group-hover:text-blue-500 transition-all">Hacks to Supercharge
                        Your Day</h3>
                    <div class="mt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                            nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                    </div>
                </div>
                <hr class="my-6"/>
                <div class="flex flex-wrap items-center gap-3">
                    <img src='https://readymadeui.com/team-2.webp' class="w-9 h-9 rounded-full"/>
                    <p class="text-xs">BY MARK ADAIR</p>
                </div>
            </div>
            <div class="cursor-pointer rounded overflow-hidden group">
                <div>
                    <span class="block text-gray-400 mb-2">5 OCT 2023</span>
                    <h3 class="text-xl font-extrabold group-hover:text-blue-500 transition-all">Trends and
                        Predictions
                    </h3>
                    <div class="mt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                            nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                    </div>
                </div>
                <hr class="my-6"/>
                <div class="flex flex-wrap items-center gap-3">
                    <img src='https://readymadeui.com/team-3.webp' class="w-9 h-9 rounded-full"/>
                    <p class="text-xs">BY SIMON KONECKI</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('js/liking_news.js') }}" data-user-id="{{ $user_id }}" data-news-id="{{ $news['id'] }}"></script>


<script>
    function updateComments() {
        $.ajax({
            url: '{{ route("comments.show", ["news_id" => $news->id]) }}',
            type: 'GET',
            success: function (response) {
                $('#comments-container').html(response);
            }
        });
    }

    setInterval(updateComments, 10000);
</script>


