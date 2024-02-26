<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-[1920px] mx-auto font-[sans-serif] text-[#333] text-sm">
<div class="bg-white">

    <div class="mb-5 px-4 sm:px-10">
        <div class="max-w-7xl w-full mx-auto">
            <div class="grid lg:grid-cols-2 items-center gap-10">
                <div class="">
                    <h2 class="md:text-4xl text-3xl font-extrabold mb-6">How to Take Back Wellness From the Wellness
                        Industry</h2>
                    <p>Laboris qui Lorem ad tempor ut reprehenderit. Nostrud anim nulla officia ea sit deserunt. Eu eu
                        quis anim
                        aute Laboris qui Lorem ad tempor ut reprehenderit. Eu eu quis anim aute.</p>
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
                    <div class="container px-0 mx-auto sm:px-5">
                        <div
                            class="flex-col w-full py-4 mx-auto mt-3 bg-white border-b-2 ml-3 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-3/3">
                            <div class="flex flex-row md-10">
                                <img class="w-12 h-12 border-2 border-gray-300 rounded-full" alt="Anonymous's avatar"
                                     src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80">
                                <div class="flex-col mt-1 ml-3">
                                    <div class="flex items-center flex-1 font-bold leading-tight">Anonymous
                                        <span class="ml-2 text-xs font-normal text-gray-500">3 days ago</span>
                                    </div>
{{--                                    @foreach($post->comments as $comment)--}}

{{--                                    <div class="flex-1 mt-1 text-sm font-medium leading-loose text-gray-600">--}}
{{--                                        {{ $comment->content }}--}}
{{--                                    </div>--}}

{{--                                    @endforeach--}}

                                    <form class="mt-4"
                                          action="{{ route('comments.store') }}"
                                          method="POST"
                                    >
                                        @csrf
                                        <label for="comment" class="block text-sm font-medium text-gray-700">Add a
                                            comment:</label>
                                        <div
                                            class="bg-white flex px-1 py-1 rounded-full border border-blue-500 overflow-hidden my-3 font-[sans-serif]">
                                            <textarea type='email' name="content" placeholder='Add your comment here...'
                                                      class="outline-none bg-white pl-4 text-sm w-full"></textarea>
{{--                                            <input type="hidden" name="post_id" value="{{ $post->id }}">--}}
                                        </div>

                                        <div class="mt-3">
                                            <button type='submit'
                                                    class="bg-blue-600 hover:bg-blue-700 transition-all text-white text-sm rounded-full px-5 py-2.5">
                                                Submit
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="px-4 sm:px-10 mt-5">
        <div class="max-w-7xl w-full mx-auto">
            <div class="grid md:grid-cols-2 items-center gap-10">
                <div>
                    <h2 class="md:text-4xl text-3xl font-extrabold mb-6">Fresh Ideas for your business design</h2>
                    <p>Veniam proident aute magna anim excepteur et ex consectetur velit ullamco veniam minim aute
                        sit. Elit
                        occaecat officia et laboris Lorem minim. Officia do aliqua adipisicing ullamco in. anim
                        excepteur et ex
                        consectetur velit ullamco veniam minim aute sit.</p>

                    <div class="mt-8">
                        <div class="flex items-center">
                            <img src="https://readymadeui.com/profile_2.webp" class="w-12 h-12 rounded-full"/>
                            <div class="ml-4">
                                <h4 class="font-extrabold text-base">John Doe</h4>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p>Veniam proident aute magna anim excepteur et ex consectetur velit
                                ullamco veniam minim aute sit. Elit occaecat officia et laboris Lorem minim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-10 mt-28">
        <div class="max-w-7xl mx-auto">
            <div>
                <h2 class="md:text-4xl text-3xl font-extrabold">Check our latest article</h2>
            </div>
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


</div>

<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);

</script>
</body>

</html>
