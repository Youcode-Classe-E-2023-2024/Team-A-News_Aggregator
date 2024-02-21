<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">


<div x-data="setup()" :class="{ 'dark': isDark }">
    <div
        class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

        <x-headerdash/>

        <x-sidebardash/>

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            <x-statisticscards/>
            <div class="grid grid-cols-1 lg:grid-cols-1 p-4 gap-4">

                {{--                <!-- Social Traffic -->--}}
                {{--                <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">--}}
                {{--                    <div class="rounded-t mb-0 px-0 border-0">--}}
                {{--                        <div class="flex flex-wrap items-center px-4 py-2">--}}
                {{--                            <div class="relative w-full max-w-full flex-grow flex-1">--}}
                {{--                                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Social Traffic</h3>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="block w-full overflow-x-auto">--}}
                {{--                            <table class="items-center w-full bg-transparent border-collapse">--}}
                {{--                                <thead>--}}
                {{--                                <tr>--}}
                {{--                                    <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Referral</th>--}}
                {{--                                    <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Visitors</th>--}}
                {{--                                    <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>--}}
                {{--                                </tr>--}}
                {{--                                </thead>--}}
                {{--                                <tbody>--}}
                {{--                                <tr class="text-gray-700 dark:text-gray-100">--}}
                {{--                                    <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Facebook</th>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">5,480</td>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">hello</td>--}}
                {{--                                </tr>--}}
                {{--                                <tr class="text-gray-700 dark:text-gray-100">--}}
                {{--                                    <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Twitter</th>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3,380</td>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">heelloo</td>--}}
                {{--                                </tr>--}}
                {{--                                <tr class="text-gray-700 dark:text-gray-100">--}}
                {{--                                    <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Instagram</th>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,105</td>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">helloo</td>--}}
                {{--                                </tr>--}}
                {{--                                <tr class="text-gray-700 dark:text-gray-100">--}}
                {{--                                    <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Google</th>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,985</td>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">doo</td>--}}
                {{--                                </tr>--}}
                {{--                                <tr class="text-gray-700 dark:text-gray-100">--}}
                {{--                                    <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Linkedin</th>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2,250</td>--}}
                {{--                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">soso</td>--}}
                {{--                                </tr>--}}
                {{--                                </tbody>--}}
                {{--                            </table>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- ./Social Traffic -->--}}

            </div>

            <!-- Task Summaries -->
            <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-1 gap-4 text-black dark:text-white">
                <h3 class="ml-5 text-lg font-semibold">Flux RSS recent Links</h3>
                <div class="ml-5 flex items-center">
                    <input type="text" name="name" id="name"
                           class="w-80 mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-l-md text-sm text-gray-900"
                           placeholder="Enter The URL">
                    <form action=""
                          method="post"
                          class="bg-indigo-600 hover:bg-indigo-700 rounded-r-md px-4 py-2 text-gray-100 text-sm hover:shadow-xl transition duration-150 uppercase">
                        @csrf
                            Submit
                    </form>
                </div>

                <div class="ml-5 mr-5 md:col-span-2 xl:col-span-1">
                    <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                        <div class="text-sm text-black dark:text-gray-50 mt-2">
                            <div
                                class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                https://www.cbc.ca/webfeed/rss/rss-canada
                            </div>
                            <div
                                class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                https://www.cbc.ca/webfeed/rss/rss-world
                            </div>
                            <div
                                class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                https://www.cbc.ca/webfeed/rss/rss-topstories
                            </div>
                            <div
                                class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                https://www.cbc.ca/webfeed/rss/rss-technology
                            </div>
                            <div
                                class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                https://www.cbc.ca/webfeed/rss/rss-Indigenous
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Task Summaries -->

            <!-- Client Table -->
            <div class="mt-4 mx-4">
                <h3 class="text-lg font-semibold pb-4">Users</h3>
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Image</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Role</th>
                                <th class="px-4 py-3">Created date</th>
                                <th class="px-4 py-3 text-center">Operation</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                 src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                 alt="" loading="lazy"/>
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                 aria-hidden="true"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">hafsa</td>
                                <td class="px-4 py-3 text-sm">hafsa@gmail.com</td>
                                <td class="px-4 py-3 text-sm">Admin</td>
                                <td class="px-4 py-3 text-sm">15-01-2021</td>
                                <td class="px-4 py-3 text-xs text-center">
                                    <button type="submit"
                                            class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                        Delete User
                                    </button>
                                    <button data-modal-target="crud-modal"
                                            data-modal-toggle="crud-modal"
                                            class=" bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded"
                                            type="button">
                                        Update User
                                    </button>

                                </td>
                            </tr>
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
        <!-- ./Client Table -->

    </div>
</div>
</div>


<div id="crud-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Product
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-1">
                    <div class="sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
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


<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<script>
    const setup = () => {
        const getTheme = () => {
            if (window.localStorage.getItem('dark')) {
                return JSON.parse(window.localStorage.getItem('dark'))
            }
            return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }

        const setTheme = (value) => {
            window.localStorage.setItem('dark', value)
        }

        return {
            loading: true,
            isDark: getTheme(),
            toggleTheme() {
                this.isDark = !this.isDark
                setTheme(this.isDark)
            },
        }
    }
</script>
