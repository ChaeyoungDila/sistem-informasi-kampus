<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        $jurusan = Jurusan::all();
        return view('dosen', compact('dosen', 'jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'jurusan_id' => 'required'
        ]);

        Dosen::create([
            'nama_dosen' => $request->nama_dosen,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return redirect()->route('dosen');
    }

    public function view($id)
    {
        $dosen = Dosen::find($id);
        $jurusan = Jurusan::all();
        return view('view_dosen', compact('dosen', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'jurusan_id' => 'required'
        ]);

        Dosen::where('id', $id)->update([
            'nama_dosen' => $request->nama_dosen,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return redirect()->route('dosen');
    }

    public function delete($id)
    {
        Dosen::where('id', $id)->delete();
        return redirect()->route('dosen');
    }
}
