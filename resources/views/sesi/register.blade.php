@extends('layout.aplikasi')
@section('konten')
    <div class="flex flex-col items-center justify-center mt-8 ">
        <h1 class="font-bold text-2xl">Sistem Informasi Akademik</h1>
        <h1 class="font-bold text-2xl mb-4">UNIRA Malang</h1>
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
            <form class="space-y-6" action="/sesi/create" method="POST">
                @csrf
                <h5 class="text-center text-2xl font-bold text-gray-900">Registrasi Akun</h5>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="name" name="name" id="email" value="{{ Session::get('name') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email" value="{{ Session::get('email') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900">password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        {{ Session::get('password') }}
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <button type="submit" name="submit"
                    class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Buat
                    Akun</button>

            </form>
        </div>
    </div>
@endsection
