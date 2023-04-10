<nav class="px-2 py-4 bg-white border-gray-200 border shadow-md">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
            <img src={{ asset('src/logo/logo-unira.png') }} class="scale-200 sm:h-6" alt="logo" />

            <span
                class="mx-6 self-center text-lg font-semibold whitespace-nowrap hover:text-green-700">Sistem
                Informasi
                Akademik</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white md:dark:bg-gray-900">
                <li>
                    <a href="{{ url('dashboard') }}"
                        class="block py-2 pl-3 pr-4 text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent"
                        aria-current="page">Dashboard</a>
                </li>
                <li>
                    <a href="{{ 'mahasiswa' }}"
                        class="block py-2 pl-3 pr-4 text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">Mahasiswa</a>
                </li>
                <li>
                    <a href="{{ url('profile') }}"
                        class="block py-2 pl-3 pr-4 text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">Profile</a>
                </li>
                <li>
                    <a href="{{ 'dosen' }}"
                        class="block py-2 pl-3 pr-4 text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">Dosen</a>
                </li>
                <li>
                    <a href="/sesi/logout"
                        class="block py-2 pl-3 pr-4 text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">
                        Logout<i class="fa-solid fa-right-from-bracket ml-3"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
