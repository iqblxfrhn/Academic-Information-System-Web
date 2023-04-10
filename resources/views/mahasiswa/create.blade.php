@extends('layout.aplikasi')
@section('konten')
    <div class="flex items-center mx-24 mt-4">
        <a href='{{ url('mahasiswa') }}'
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-2">
            <i
                class="fa-solid fa-circle-arrow-left text-white transition duration-75 group-hover:text-hijau px-1"></i>Kembali</a>
    </div>
    <div
        class="justify-center max-w-full mx-24 mt-4 p-8 bg-white border border-gray-200 rounded-lg shadow-md  ">
        <h1 class="text-center font-bold text-2xl text-hitam">Tambah Data Mahasiswa</h1>
        <form action='{{ url('mahasiswa') }}' method="post">
            @csrf
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-hitam">Nama</label>
                <input type="nama" id="nama" value="{{ Session::get('nama') }}" name="nama"
                    class="bg-green-50 border border-hijau text-hitam text-sm rounded-lg focus:ring-utama focus:border-green-400 block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900">NIM</label>
                <input type="nim" id="nim" value="{{ Session::get('nim') }}" name="nim"
                    class="bg-green-50 border border-hijau text-hitam text-sm rounded-lg focus:ring-utama focus:border-green-400 block w-full p-2.5">
            </div>
            <div class="mb-6">

                <label for="jurusan_id" class="block mb-2 text-sm font-medium text-gray-900">Pilih
                    Jurusan</label>
                <select id="jurusan_id" name="jurusan_id"
                    class="bg-green-50 border border-hijau text-hitam text-sm rounded-lg focus:ring-utama focus:border-green-500 block w-full p-2.5">
                    <option disabled value>Pilih Jurusan</option>
                    @foreach ($jur as $item)
                        <option value="{{ $item->id }}">{{ $item->jurusan }}</option>
                    @endforeach
                </select>

            </div>
            <div class="mb-6">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                <input type="alamat" id="alamat" value="{{ Session::get('alamat') }}" name="alamat"
                    class="bg-green-50 border border-hijau text-hitam text-sm rounded-lg focus:ring-utama focus:border-green-400 block w-full p-2.5">
            </div>

            <button type="submit"
                class="text-putih bg-utama hover:bg-sekunder focus:ring-4 focus:outline-none focus:ring-hijau font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
        </form>
    </div>
    </div>
@endsection
