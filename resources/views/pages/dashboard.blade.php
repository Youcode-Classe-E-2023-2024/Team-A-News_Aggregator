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
                    @if(Auth::user()->can('feed-create'))
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
                    @endif

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
                                    @if(Auth::user()->can('feed-delete'))
                                    <form action="/feed/delete/{{ $feed_link["id"] }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                    @endif
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
                                                src="{{ asset('storage/'. $user->profile_image) }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">{{ $user->name }}</td>
                                <td class="px-4 py-3 text-sm">{{ $user->email }}</td>
                                <td class="px-4 py-3 text-sm">
                                    @if(Auth::user()->can('update-user-role'))
                                    <form action="/update_user_role/{{$user->id}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="flex items-center space-x-2">
                                            <select name="updated_role" class="p-1 border border-gray-300 rounded-sm text-sm">
                                                @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                                    <option value="{{ $role->name }}" {{ $user->getRoleNames()->first() === $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="px-2 py-1 bg-blue-500 text-white rounded-sm text-sm">Save</button>
                                        </div>
                                    </form>
                                    @else
                                    {{ $user->getRoleNames()->first() }}
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm">{{ $user->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-3 text-xs text-center">
                                    @if(Auth::user()->can('delete-user'))
                                    <form action="/delete_user/{{$user->id}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                                            Delete User
                                        </button>
                                    </form>
                                    @endif
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




<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<script src="{{ url('/js/dashboard.js') }}"></script>
