@extends('layouts.main_layout')

@section('content')
<style>
    .dosen-table {
        border-collapse: collapse;
        width: 100%;
    }

    .dosen-table td, .dosen-table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .dosen-table tr:nth-child(even){background-color: #f2f2f2;}

    .dosen-table tr:hover {background-color: #ddd;}

    .dosen-table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>

<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow">
    {{-- Tambah Jurusan --}}
    <div class="p-6 border-b border-gray-200">
        <form action="{{ route('dosen.update', ['id' => $dosen->id]) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="text-xl text-gray-600">Nama Dosen</label><br>
                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="nama_dosen" id="nama_dosen" value="{{ $dosen->nama_dosen }}" required>
            </div>
            <div class="mb-4">
                <label class="text-xl text-gray-600">Jurusan</label><br>
                <select name="jurusan_id" id="jurusan_id" class="border-2 border-gray-300 p-2 w-full" required>
                    <option value="">-- Pilih Jurusan --</option>
                    @foreach ($jurusan as $item)
                        <option value="{{ $item->id }}" @if ($item->id == $dosen->jurusan_id) selected @endif>{{ $item->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Ubah Dosen</button>
            </div>
        </form>
    </div>
</div>
@endsection