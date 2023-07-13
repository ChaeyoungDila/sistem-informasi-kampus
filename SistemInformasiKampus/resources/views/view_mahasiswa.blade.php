@extends('layouts.main_layout')

@section('content')
<style>
    .mahasiswa-table {
        border-collapse: collapse;
        width: 100%;
    }

    .mahasiswa-table td, .mahasiswa-table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .mahasiswa-table tr:nth-child(even){background-color: #f2f2f2;}

    .mahasiswa-table tr:hover {background-color: #ddd;}

    .mahasiswa-table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>

<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow">
    <div class="p-6 border-b border-gray-200">
        <form action="{{ route('mahasiswa.update', ['id' => $mahasiswa->id]) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="text-xl text-gray-600">Nama Mahasiswa</label><br>
                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="nama_mahasiswa" id="nama_mahasiswa" value="{{ $mahasiswa->nama_mahasiswa }}" required>
            </div>
            <div class="mb-4">
                <label class="text-xl text-gray-600">Jurusan</label><br>
                <select name="jurusan_id" id="jurusan_id" class="border-2 border-gray-300 p-2 w-full" required>
                    <option value="">-- Pilih Jurusan --</option>
                    @foreach ($jurusan as $item)
                        <option value="{{ $item->id }}" @if ($item->id == $mahasiswa->jurusan_id) selected @endif>{{ $item->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Ubah Mahasiswa</button>
            </div>
        </form>
    </div>
</div>
@endsection