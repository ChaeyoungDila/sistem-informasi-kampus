<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = MataKuliah::all();
        $jurusan = Jurusan::all();
        return view('mata_kuliah', compact('matakuliah', 'jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required',
            'jurusan_id' => 'required',
        ]);

        MataKuliah::create([
            'nama_matkul' => $request->nama_matkul,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return redirect()->route('mata-kuliah');
    }

    public function view($id)
    {
        $matakuliah = MataKuliah::find($id);
        $jurusan = Jurusan::all();
        return view('view_mata_kuliah', compact('matakuliah', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matkul' => 'required',
            'jurusan_id' => 'required',
        ]);

        MataKuliah::where('id', $id)->update([
            'nama_matkul' => $request->nama_matkul,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return redirect()->route('mata-kuliah');
    }

    public function delete($id)
    {
        MataKuliah::where('id', $id)->delete();
        return redirect()->route('mata-kuliah');
    }
}
