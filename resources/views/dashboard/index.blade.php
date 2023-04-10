@extends('layout.aplikasi')
@section('konten')
    <div class="flex flex-row mx-8 my-4 gap-4 flex-wrap">
        <div
            class="flex min-w-full p-2 flex-row bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100">
            <div class="flex flex-start leading-3 mx-4 my-2">
                <div class="flex items-center mr-6">
                    <img src={{ asset('src/logo/logo-unira.png') }} class="scale-200 sm:h-7" alt="logo" />
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Selamat Datang di Sistem Informasi
                        Akademik</h3>
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900">Universitas Islam Raden
                        Rahmat Malang</h3>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center flex-wrap gap-12 min-w-full">
            <div
                class="flex flex-col justify-between items-center p-2 bg-white border w-72 h-40 rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100">
                <div class="flex">
                    <i class="fa-solid fa-users fa-2xl ml-8 scale-200 text-utama"></i>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Mahasiswa</h5>
                    <p class="text-lg font-semibold text-gray-700">{{ $jumlah_mahasiswa }}</p>
                </div>
            </div>
            <div
                class="flex flex-col justify-between items-center p-2 bg-white border w-72 h-40 rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100">
                <div class="flex">
                    <i class="fa-solid fa-chalkboard-user fa-2xl ml-8 scale-200 text-utama"></i>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Dosen</h5>
                    <p class="text-lg font-semibold text-gray-700">{{ $jumlah_dosen }}</p>
                </div>
            </div>
            <div
                class="flex flex-col justify-between items-center p-2 bg-white border w-72 h-40 rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100">
                <div class="flex">
                    <i class="fa-solid fa-book fa-2xl ml-8 scale-200 text-utama"></i>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jurusan</h5>
                    <p class="text-lg font-semibold text-gray-700">{{ $jumlah_jurusan }}</p>
                </div>
            </div>
            <div
                class="flex flex-col justify-between items-center p-2 bg-white border w-72 h-40 rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100">
                <div class="flex">
                    <i class="fa-solid fa-user-gear fa-2xl ml-8 scale-200 text-utama"></i>
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Staff</h5>
                    <p class="text-lg font-semibold text-gray-700">3</p>
                </div>
            </div>
        </div>


    </div>
@endsection
