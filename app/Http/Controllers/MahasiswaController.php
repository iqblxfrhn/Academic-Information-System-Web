<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
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
            $data = mahasiswa::where('nim', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('jurusan', 'like', "%$katakunci%")
                ->orWhere('alamat', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $data = mahasiswa::with('Jurusan')->orderBy('nama', 'asc')->paginate(8);
        }
        return view('mahasiswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jur = Jurusan::all();
        return view('mahasiswa.create')->with('jur', $jur);
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
        Session::flash('nim', $request->nim);
        Session::flash('jurusan_id', $request->jurusan_id);
        Session::flash('alamat', $request->alamat);
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'jurusan_id' => 'required',
            'alamat' => 'required',
        ], [
            'nama.required' => 'NAMA wajib diisi',
            'nim.required' => 'NIM wajib diisi',
            'nim.numeric' => 'NIM wajib dalam ANGKA',
            'nim.unique' => 'NIM yang diisikan sudah ada dalam data MAHASISWA',
            'jurusan_id.required' => 'JURUSAN wajib diisi',
            'alamat.required' => 'ALAMAT wajib diisi',
        ]);
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan_id,
            'alamat' => $request->alamat,
        ];
        mahasiswa::create($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil Menambahkan Data');
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
        $jur = Jurusan::all();

        $data = mahasiswa::with('jurusan')->where('nim', $id)->first();
        return view('mahasiswa.edit', compact('data' ,'jur'))->with('data', $data);
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
            'jurusan_id' => 'required',
            'alamat' => 'required',
        ], [
            'nama.required' => 'NAMA wajib diisi',
            'jurusan_id.required' => 'JURUSAN wajib diisi',
            'alamat.required' => 'ALAMAT wajib diisi',
        ]);
        $data = [
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan_id,
            'alamat' => $request->alamat,
        ];
        mahasiswa::where('nim', $id)->update($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mahasiswa::where('nim', $id)->delete();
        return redirect()->to('mahasiswa')->with('success', 'Berhasil Menghapus Data');
    }
}
