@if ($errors->any())
    <div id="alert-4" class="flex mx-8 p-2 mt-4 text-red-700 bg-red-100 rounded-lg"
        role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 items-center justify-center" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            <ul class="space-y-1 text-red-500 list-disc list-inside">
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="flex mx-8 p-2 my-4 text-green-700 border border-green-300 rounded-lg bg-green-50"
        role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ Session::get('success') }}
        </div>
    </div>

    <script>
        setTimeout(function() {
            document.querySelector('[role="alert"]').style.display = 'none';
        }, 5000);
    </script>
@endif
