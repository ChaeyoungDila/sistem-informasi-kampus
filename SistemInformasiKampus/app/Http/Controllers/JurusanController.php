<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan', compact('jurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|unique:jurusans|max:255',
        ]);

        Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect('/jurusan');
    }

    public function view($id)
    {
        $jurusan = Jurusan::find($id);
        return view('view_jurusan', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jurusan' => 'required|unique:jurusans|max:255',
        ]);

        Jurusan::where('id', $id)->update([
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect('/jurusan');
    }

    public function delete($id)
    {
        Jurusan::where('id', $id)->delete();
        return redirect('/jurusan');
    }
}
