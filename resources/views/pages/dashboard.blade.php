<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">


<div x-data="setup()" :class="{ 'dark': isDark }">
    <div
        class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

        <x-headerdash />

        <x-sidebardash />

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            <x-statisticscards />
            <!-- Task Summaries -->
            <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-1 gap-4 text-black dark:text-white">
                <h3 class="ml-5  text-lg font-semibold">Flux RSS recent Links</h3>
                <div class="ml-5 flex items-center">
                    <form action="{{ route('create_feed') }}" method="post"
                        class="bg-indigo-600 hover:bg-indigo-700 rounded-r-md px-4 py-2.5 mt-3 text-gray-100 text-sm ">
                        @csrf

                        <select
                        class="w-80 border border-gray-300 py-2.5 focus:outline-none focus:border-gray-300 rounded-l-lg rounded-l-md text-sm text-gray-900"
                        name="category" id="">
                        <option value="" selected disabled hidden>Choose Category here</option>
                        @foreach ($categories as $category)
                        <option value="{{$category['id']}}">{{$category['category']}}</option>
                        @endforeach
                        </select>
                        <input type="text" name="link" id="name"
                            class="w-80 border border-gray-300 py-2.5 focus:outline-none focus:border-gray-300 rounded-l-lg rounded-l-md text-sm text-gray-900"
                            placeholder="Enter The URL">
                        <button class="">
                            Submit
                        </button>
                    </form>

                </div>

                <div class="ml-5 mr-5 md:col-span-2 xl:col-span-1">
                    <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                        @foreach ($feed_links as $feed_link)
                            <div class="text-sm text-black dark:text-gray-50 mt-2">
                                <div
                                    class="flex justify-between px-4 items-center bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                    <div>
                                        {{$feed_link["link"]}}
                                    </div>
                                    <form action="/feed/delete/{{ $feed_link["id"] }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Client Table -->
        <div class="mt-4 mx-4">
            <h3 class="text-lg font-semibold pb-4">Users</h3>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Image</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Role</th>
                                <th class="px-4 py-3">Created date</th>
                                <th class="px-4 py-3 text-center">Operation</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($users as $user)
                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">{{ $user->name }}</td>
                                <td class="px-4 py-3 text-sm">{{ $user->email }}</td>
                                <td class="px-4 py-3 text-sm">{{ $user->role }}</td>
                                <td class="px-4 py-3 text-sm">{{ $user->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-3 text-xs text-center">
                                    <button type="submit"
                                        class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                        Delete User
                                    </button>
                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                        class=" bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded"
                                        type="button">
                                        Update User
                                    </button>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </li>
                </ul>
                </nav>
                </span>
            </div>
        </div>
    </div>

</div>
</div>
</div>


<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Change the Current Role
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-1">
                    <div class="sm:col-span-1">
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                        <select id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select A Role</option>
                            <option value="TV">Admin</option>
                            <option value="PC">User</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Change the Role
                </button>
            </form>
        </div>
    </div>
</div>


<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<script src="{{ url('/js/dashboard.js') }}"></script>
