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
    <a class="underline" href="{{ route('home') }}"><-Home</a>
    <div class="p-6 border-b border-gray-200">
        <form action="{{ route('jurusan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="text-xl text-gray-600">Nama Jurusan</label><br>
                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="nama_jurusan" id="nama_jurusan" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Tambah Jurusan</button>
            </div>
        </form>
    </div>
    <table class="jurusan-table">
        <thead>
            <tr>
                <td>Action</td>
                <td>Nama Jurusan</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusan as $item)
                <tr>
                    <td>
                        <a href="{{ route('jurusan.view', ['id' => $item->id]) }}"><u>Edit</u></a>
                        <a href="{{ route('jurusan.delete', ['id' => $item->id]) }}"><u>Delete</u></a>
                    </td>
                    <td>{{ $item->nama_jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection