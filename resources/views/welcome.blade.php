<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="/css/app.css" rel="stylesheet">
    <link rel=”icon” type="image/x-icon" href="{{ asset('src/logo/logo-unira.png') }}">


    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
</head>

<body>
    <div class="flex w-full min-h-screen font-sans text-hitam bg-putih">
        <aside class="py-6 px-10 w-64 border-r border-grey-500">
            <a href="#" class="flex flex-col items-center pl-3 mt-5">
                <img src={{ asset('src/logo/logo-unira.png') }} class="scale-200 sm:h-7" alt="logo" />
                <span class="self-center font-semibold whitespace-nowrap dark:text-white mt-6">Sistem
                    Informasi</span>
                <span class="self-center font-semibold whitespace-nowrap dark:text-white mb-7">Akademik</span>
            </a>
            <ul class="pt-2 mb-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                <ul class="space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 mb-2 text-base font-normal text-hitam rounded-lg dark:text-putih hover:bg-hijau dark:hover:bg-hitam justify-between">
                            <i
                                class="fa-solid fa-chart-pie text-hitam transition duration-75 dark:text-putih group-hover:text-hijau dark:group-hover:text-putih px-1"></i>
                            <span class="ml-3 ">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 mb-2 text-base font-normal text-hitam rounded-lg dark:text-putih hover:bg-hijau dark:hover:bg-putih justify-between">
                            <i
                                class="fa-solid fa-school text-hitam transition duration-75 dark:text-putih group-hover:text-hijau dark:group-hover:text-putih px-1"></i>
                            <span class="ml-3">Akademik</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 mb-2 text-base font-normal text-hitam rounded-lg dark:text-putih hover:bg-hijau dark:hover:bg-white justify-between">
                            <i
                                class="fa-solid fa-user-tie text-hitam transition duration-75 dark:text-putih group-hover:text-hijau dark:group-hover:text-putih px-1"></i>
                            <span class="ml-3">Dosen</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 mb-2 text-base font-normal text-hitam rounded-lg dark:text-putih hover:bg-hijau dark:hover:bg-putih justify-between">
                            <i
                                class="fa-solid fa-graduation-cap text-hitam transition duration-75 dark:text-putih group-hover:text-hijau dark:group-hover:text-putih px-1"></i>
                            <span class="ml-3">Mahasiswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 mb-2 text-base font-normal text-hitam rounded-lg dark:text-putih hover:bg-hijau dark:hover:bg-putih justify-between">
                            <i
                                class="fa-solid fa-circle-user text-hitam transition duration-75 dark:text-putih group-hover:text-hijau dark:group-hover:text-putih px-1"></i>
                            <span class="ml-3">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class=" flex items-center p-2 mb-2 text-base font-normal text-hitam rounded-lg dark:text-putih hover:bg-hijau dark:hover:bg-putih justify-between">
                            <i
                                class="fa-solid fa-gear text-hitam transition duration-75 dark:text-putih group-hover:text-hijau dark:group-hover:text-putih px-1"></i>
                            <span class="ml-3">Pengaturan</span>
                        </a>
                    </li>
                </ul>
        </aside>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>

</html>
