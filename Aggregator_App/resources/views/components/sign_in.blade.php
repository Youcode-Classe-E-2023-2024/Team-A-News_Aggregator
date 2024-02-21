<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca --><form action="{{ route('form_login') }}"  method="post" class="mt-10 space-y-4">
        @csrf
        <div>
            <input name="email" type="email" autocomplete="email" required class="w-full text-sm px-4 py-3 rounded outline-none border-2 focus:border-blue-500" placeholder="Email address" />
        </div>
        <div>
            <input name="password" type="password" autocomplete="current-password" required class="w-full text-sm px-4 py-3 rounded outline-none border-2 focus:border-blue-500" placeholder="Password" />
        </div>
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                <label for="remember-me" class="ml-3 block text-sm">
                    Remember me
                </label>
            </div>
            <div>
                <a href="jajvascript:void(0);" class="text-sm text-blue-600 hover:text-blue-500">
                    Forgot Password?
                </a>
            </div>
        </div>
        <div class="!mt-10">
            <button type="button" class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Log in
            </button>
        </div>
    </form>
</div>
