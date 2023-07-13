@extends('layouts.main_layout')

@section('content')
<style>
    .jurusan-table {
        border-collapse: collapse;
        width: 100%;
    }

    .jurusan-table td, .jurusan-table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .jurusan-table tr:nth-child(even){background-color: #f2f2f2;}

    .jurusan-table tr:hover {background-color: #ddd;}

    .jurusan-table th {
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
        <form action="{{ route('jurusan.update', ['id' => $jurusan->id]) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="text-xl text-gray-600">Nama Jurusan</label><br>
                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="nama_jurusan" id="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Ubah Jurusan</button>
            </div>
        </form>
    </div>
</div>
@endsection