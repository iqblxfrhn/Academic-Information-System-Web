@extends('layout.aplikasi')
@section('konten')
    <div class="flex flex-row mx-8 my-4 gap-4 flex-wrap justify-center">

        <div
            class="flex justify-center w-full h-min-screen max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
            <div class="flex flex-col items-center p-10 m-4">
                <div class="flex mt-4 space-x-3 mb-4 md:mt-6">
                    <img class="w-12 h-12 py-10  rounded-full shadow-lg" src="{{ asset('src/images/iqbal.jpeg') }}"
                        alt="iqbal image" />
                </div>
                <h1 class="mb-1 text-2xl font-semibold text-gray-900">Iqbal Farhan Nuruddin</h1>
                <span class="text-sm text-gray-500">21552021013</span>
                <span class="text-sm text-gray-500">Teknik Informatika</span>
                <span class="text-sm text-gray-500">Universitas Islam Raden Rahmat Malang</span>
                <div class="flex mt-4 space-x-3 mb-4 md:mt-6">
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">Add
                        friend</a>
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Message</a>
                </div>
            </div>
        </div>
        <div
            class="flex justify-center w-full h-min-screen max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
            <div class="flex flex-col items-center p-10 m-4">
                <div class="flex mt-4 space-x-3 mb-4 md:mt-6 rounded-full">
                    <img class="w-12 h-12 py-10  rounded-full shadow-lg" src="{{ asset('src/logo/User.svg') }}"
                        alt="iqbal image" />
                </div>
                <h1 class="mb-1 text-2xl font-semibold text-gray-900">Sonhaji Akbar</h1>
                <span class="text-sm text-gray-500">Basis Data 2</span>
                <span class="text-sm text-gray-500">Teknik Informatika</span>
                <span class="text-sm text-gray-500">Universitas Islam Raden Rahmat Malang</span>
                <div class="flex mt-4 space-x-3 mb-4 md:mt-6">
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">Add
                        friend</a>
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Message</a>
                </div>
            </div>
        </div>
    </div>
@endsection
