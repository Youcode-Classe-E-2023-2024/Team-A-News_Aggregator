<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- home button -->
<div class="m-10">
    <a href="/"
       class="bg-black border border-gray-200 rounded-lg ml-4 p-2 shadow-2xl hover:opacity-70 text-white">HOME</a>
</div>

<!-- Section 1 -->
<div class="bg-white">
    <div class="px-4 sm:px-10">
        <div class="max-w-7xl w-full mx-auto">
            <h1 class="mb-10 text-xl w-1/2 mx-auto text-black text-center font-extrabold">{{ $news['title'] }}</h1>
            <!-- Like and source -->
            <div class="flex-col">
                <div class="w-full mt-5 justify-center ">
                    <img src="https://readymadeui.com/team-image.webp" alt="Premium Benefits"
                         class="w-1/2 h-1/2 mx-auto"/>
                </div>
                <div class="flex justify-center">
                    @if(Auth::check() && Auth::user()->can('favorite-liking'))
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
                    @endif
                    <div class="justify-center flex items-center">
                        <a href="{{ $news['link'] }}" target="_blank" rel="noopener noreferrer"
                           class="inline-block p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z"
                                      clip-rule="evenodd"/>
                                <path fill-rule="evenodd"
                                      d="M4.34 10a5.97 5.97 0 000 0A7.98 7.98 0 0010 14a7.98 7.98 0 005.66-2 5.97 5.97 0 000-4A5.97 5.97 0 0010 6a5.97 5.97 0 00-5.66 4zm2.83-.53a4 4 0 017.5 0 3.97 3.97 0 01-7.5 0zM10 3a9.96 9.96 0 00-7 2.75A9.96 9.96 0 001 10c0 1.57.36 3.08 1 4.43a9.96 9.96 0 003 3.82c1.35.64 2.86 1 4.43 1s3.08-.36 4.43-1a9.96 9.96 0 003-3.82c.64-1.35 1-2.86 1-4.43 0-2.76-1.06-5.27-2.75-7A9.96 9.96 0 0010 3zm0 11c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
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
                    </div>
                </div>

            </div>
            <!-- Comment Form -->
            <div class="relative flex items-center justify-center antialiased bg-white bg-gray-100 min-w-screen">
                <div class="container w-1/2 px-0 mx-auto sm:px-5">
                    <div
                        class="flex-col w-full py-4 mx-auto mt-3 bg-white border-b-2 ml-3 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-3/3">
                        <div class="flex-col">
                            <div id="comments-container" style="height: 300px; overflow: auto;">
                            </div>
                            <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    @auth()
                                        <div class="w-full md:w-full px-3 mb-2 mt-2">
                                            <input name="csrfToken" value="{{csrf_token()}}" type="hidden">
                                            <input
                                                id="commentInput"
                                                class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                                name="comment" placeholder='Type Your Comment'
                                                required>
                                        </div>
                                        <div class="w-full md:w-full flex items-start md:w-full px-3">
                                            <div class="-mr-1">
                                                <button type="button"
                                                        id="addCommentBtn"
                                                        class="bg-blue-700 text-white font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-blue-500"
                                                >
                                                    Public
                                                </button>
                                            </div>
                                        </div>
                                    @endauth
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section 2 -->
<!-- reviews -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
        <ul role="list" class="grid gap-y-12 sm:grid-cols-3 sm:gap-y-16 xl:col-span-2">
            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full"
                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600">Journaliste</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full"
                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600">Journaliste</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full"
                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600">Journaliste</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full"
                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600">Journaliste</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full"
                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600">Journaliste</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

</div>


<script src="{{ asset('js/liking_news.js') }}" data-user-id="{{ $user_id }}"
        data-news-id="{{ $news['id'] }}"></script>
<script>
    const btn = document.getElementById('addCommentBtn');
    const input = document.getElementById('commentInput');
    const container = document.getElementById('comments-container');


    input.addEventListener("keypress", function (event) {
        // If the user presses the "Enter" key on the keyboard
        if (event.key === "Enter") {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            btn.click();
        }
    });

    btn.addEventListener('click', function (event) {
        event.preventDefault();
        if (input.value !== "") {
            addComment();
            input.value = "";
            updateComments();
        }
    })

    function addComment() {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/comments/addComment",
            type: 'post',
            data: {
                newsId: {{$news->id}},
                comment: input.value
            },
            success: (data) => {
                console.log(data)
            }
        })
    }

    function updateComments() {
        container.innerHTML = "";
        $.ajax({
            url: '/comments/{{$news['id']}}',
            type: 'GET',
            success: function (response) {

                let comments = JSON.parse(response)
                console.log(comments);
                comments.forEach((comment) => {
                    let pic = '{{url('/')}}' + "/storage/" + comment.user.profile_image;
                    console.log(pic)
                    container.innerHTML += `<div class="flex mb-4">
                                        <div class="flex-shrink-0 mr-3">
                                            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                 src="${pic}"
                                                 alt="${comment.user.name}">
                                        </div>
                                        <div
                                            class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                            <strong>${comment.user.name}</strong> <span
                                                class="text-xs text-gray-400">${comment.created_at}</span>
                                            <p class="text-sm">
                                                ${comment.comment}
                                            </p>
                                        </div>
                                    </div>`;
                })
            }
        });
        scrollToBottom()
    }

    function scrollToBottom() {
        container.scrollTop = container.scrollHeight;
    }

    updateComments();
    scrollToBottom()
    setInterval(updateComments, 10000);
</script>
