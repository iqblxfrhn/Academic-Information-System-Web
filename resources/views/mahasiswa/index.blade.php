@extends('layout.aplikasi')
@section('konten')
    <div class="flex justify-between mx-8 my-4">
        <div class="flex">

            <form class="" action="{{ url('mahasiswa') }}" method="GET">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only shadow-md">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="katakunci" value="{{ Request::get('katakunci') }}"
                        class="flex w-96 p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500"
                        placeholder="Masukan Kata Kunci" required>
                    <button type="submit"
                        class="text-white absolute right-2 bottom-1.5  bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                </div>
            </form>
        </div>
        <div class="flex items-center">
            <a href='{{ url('mahasiswa/create') }}'
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-2">
                <i
                    class="fa-solid fa-plus text-white transition duration-75 group-hover:text-hijau px-1"></i>Tambah
                Data</a>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-8 my-4">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-4 py-3">NIM</th>
                    <th scope="col" class="px-6 py-3">Jurusan</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>
                @foreach ($data as $item)
                    <tr
                        class="bg-white border-b hover:bg-green-50">
                        <th scope="row" class="px-6 py-4">{{ $i }}</th>
                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap">
                            {{ $item->nama }}</td>
                        <td class="px-4 py-4">{{ $item->nim }}</td>
                        <td class="px-6 py-4">{{ $item->jurusan->jurusan }}</td>
                        <td class="px-6 py-4">{{ $item->alamat }}</td>
                        <td class=" py-4">
                            <a href='{{ url('mahasiswa/' . $item->nim . '/edit') }}'
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-2 mb-2">
                                <i
                                    class="fa-solid fa-pen text-white transition duration-75 group-hover:text-hijau px-1"></i></a>
                            <form onsubmit="return confirm('Yakin Akan Menghapus Data?')"
                                action="{{ url('mahasiswa/' . $item->nim) }}" method="POST"
                                class="inline focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 mr-2 mb-2 dDelete:hover:bg-red-700 dDelete:focus:ring-red-800">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit">
                                    <i
                                        class="fa-solid fa-trash text-white transition duration-75 group-hover:text-hijau px-1"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
        {{ $data->withQueryString()->links(Blade::include('vendor.pagination', 'default')) }}
    </div>
@endsection
