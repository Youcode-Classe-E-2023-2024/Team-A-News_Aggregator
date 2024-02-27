<div class="container px-0 mx-auto sm:px-5">
    <div
        class="flex-col w-full py-4 mx-auto mt-3 bg-white border-b-2 ml-3 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-3/3">
        <div class="flex-col">
            <div id="comments-container" style="height: 300px; overflow-y: auto;">
                @foreach($comments as $comment)
                    <div class="flex mb-4">
                        <div class="flex-shrink-0 mr-3">
                            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                 src="{{ url("/storage/" . $comment->user->profile_image) }}"
                                 alt="{{ $comment->user->name }}">
                        </div>
                        <div
                            class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                            <strong>{{ $comment->user->name }}</strong> <span
                                class="text-xs text-gray-400">{{ $comment->created_at }}</span>
                            <p class="text-sm">
                                {{ $comment->comment }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>


            <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2"
                 action="{{ url('/comments/addComment') }}"
                  method="post">
                <input type="text" name="news_id" value="{{ $news->id }}">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <input
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            name="comment" placeholder='Type Your Comment'
                            required>
                    </div>
                    <div class="w-full md:w-full flex items-start md:w-full px-3">
                        <div class="-mr-1">
                            <button type="submit"
                                    class="bg-blue-700 text-white font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-blue-500"
                            >
                                Public
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
