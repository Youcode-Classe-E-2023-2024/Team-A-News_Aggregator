<!-- Modal toggle -->
<button id="modal-toggle-btn" data-modal-target="select-modal" data-modal-toggle="select-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Select Interests
</button>

<!-- Main modal -->
<div id="select-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    What grabs your attention the most?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('submit_user_interests') }}" method="post" class="p-4 md:p-5">
                @csrf

                @if(session('error'))
                <p class="text-sm text-red-500">{{ session('error') }}</p>
                @endif

                @error('interests')
                <p>{{ $message }}</p>
                @enderror

                @if(session('success'))
                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                @endif

                <p style="font-size: 10px;">You can choose up to 4 interests</p>
                <div class="my-4">
                    @foreach($categories as $category)
                        <div class="flex items-center">
                            <input id="{{ $category->category }}" name="interests[]" type="checkbox" value="{{ $category->id }}"
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="{{ $category->category }}" class="ml-3 block text-sm font-medium text-gray-700">{{ $category->category }}</label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit Interests
                </button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
    // if the current user has no interests
    setTimeout(function () {
        document.getElementById('modal-toggle-btn').click();
    }, 100);

    function resetCheckboxes() {
        const checkboxes = document.querySelectorAll('input[name="interests"]');
        checkboxes.forEach((checkbox) => {
            checkbox.checked = false;
        });
    }

    function initializeCheckboxBehavior() {
        const maxInterests = 4;
        const checkboxes = document.querySelectorAll('input[name="interests"]');
        let checkedCount = 0;

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', function () {
                if (this.checked) {
                    checkedCount++;
                    if (checkedCount > maxInterests) {
                        this.checked = false;
                        checkedCount--;
                    }
                } else {
                    checkedCount--;
                }
            });
        });
    }

    initializeCheckboxBehavior();

    window.addEventListener('load', function () {
        resetCheckboxes();
    });

    function closeForm() {
        console.log("Closing form...");
    }
</script>
