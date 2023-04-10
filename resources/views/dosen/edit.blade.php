@extends('layout.aplikasi')
@section('konten')
    <div class="flex items-center mx-24 mt-4">
        <a href='{{ url('dosen') }}'
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-2">
            <i
                class="fa-solid fa-circle-arrow-left text-white transition duration-75 group-hover:text-hijau px-1"></i>Kembali</a>
    </div>
    <div
        class="justify-center max-w-full mx-24 mt-4 p-8 bg-white border border-gray-200 rounded-lg shadow-md  ">
        <h1 class="text-center font-bold text-2xl text-hitam">Edit Data Dosen</h1>
        <form action='{{ url('dosen/' . $data->nidn) }}' method="post">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-hitam">Nama</label>
                <input type="nama" id="nama" value="{{ $data->nama }}" name="nama"
                    class="bg-green-50 border border-hijau text-hitam text-sm rounded-lg focus:ring-utama focus:border-purple-400 block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="nidn" class="block mb-2 text-sm font-medium text-gray-900">NIDN</label>
                <div
                    class="bg-green-50 border border-hijau text-hitam text-sm rounded-lg focus:ring-utama focus:border-purple-400 block w-full p-2.5">
                    {{ $data->nidn }}
                </div>
            </div>
            <div class="mb-6">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                <input type="alamat" id="alamat" value="{{ $data->alamat }}" name="alamat"
                    class="bg-green-50 border border-hijau text-hitam text-sm rounded-lg focus:ring-utama focus:border-purple-400 block w-full p-2.5">
            </div>
            @if ($data->foto)
                <div class="mb-6">
                    <img class="w-10 h-10 rounded-full" src="{{ url('foto') . '/' . $data->foto }}" alt="Rounded avatar">
                </div>
            @endif
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-hitam" for="file_input">Upload
                    Foto</label>
                <input name="foto"
                    class="block w-full text-sm text-hitam border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                    id="foto" type="file">
            </div>
            <button type="submit"
                class="text-putih bg-utama hover:bg-sekunder focus:ring-4 focus:outline-none focus:ring-hijau font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
        </form>
    </div>
    </div>
@endsection
