<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Do_;
use Symfony\Component\Mime\MimeTypes;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        if (strlen($katakunci)) {
            $data = Dosen::where('nidn', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('alamat', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $data = Dosen::orderBy('nama', 'asc')->paginate(8);
        }
        return view('dosen.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('nidn', $request->nidn);
        Session::flash('alamat', $request->alamat);
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|numeric|unique:Dosen,nidn',
            'alamat' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif'

        ], [
            'nama.required' => 'NAMA wajib diisi',
            'nidn.required' => 'NIM wajib diisi',
            'nidn.numeric' => 'NIM wajib dalam ANGKA',
            'nidn.unique' => 'NIM yang diisikan sudah ada dalam data MAHASISWA',
            'alamat.required' => 'ALAMAT wajib diisi',
            'foto.required' => 'Silahkan Masukkan Foto',
            'foto.mimes' => 'Foto Hanya Diperbolehkan Berekstensi JPEG< JPG, PNG, dan GIF'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'foto' => $foto_nama,
        ];
        Dosen::create($data);
        return redirect()->to('dosen')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Dosen::where('nidn', $id)->first();
        return view('dosen.edit', compact('data'))->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ], [
            'nama.required' => 'NAMA wajib diisi',
            'alamat.required' => 'ALAMAT wajib diisi',
        ]);
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpeg,jpg,png,gif'
            ], [
                'foto.mimes' => 'Foto Hanya Diperbolehkan Berekstensi JPEG< JPG, PNG, dan GIF'
            ]);
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);

            $data_foto = Dosen::where('nomor_induk', $id)->first();
            File::delete(public_path('foto') . '/' . $data_foto->foto);

            $data['foto'] = $foto_nama;
        };

        Dosen::where('nidn', $id)->update($data);
        return redirect()->to('dosen')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dosen::where('nidn', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);
        Dosen::where('nidn', $id)->delete();
        return redirect()->to('dosen')->with('success', 'Berhasil Menghapus Data');
    }
}
