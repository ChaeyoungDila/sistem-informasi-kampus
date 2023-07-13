<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $jurusan = Jurusan::all();
        return view('mahasiswa', compact('mahasiswa', 'jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'jurusan_id' => 'required'
        ]);

        Mahasiswa::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return redirect()->route('mahasiswa');
    }

    public function view($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $jurusan = Jurusan::all();
        return view('view_mahasiswa', compact('mahasiswa', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'jurusan_id' => 'required'
        ]);

        Mahasiswa::where('id', $id)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return redirect()->route('mahasiswa');
    }

    public function delete($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect()->route('mahasiswa');
    }
}
