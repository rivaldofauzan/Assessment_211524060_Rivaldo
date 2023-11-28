<!-- resources/views/barang/create.blade.php -->
@extends('layouts.app')

@section('title', 'Create Barang')

@section('content')
    <h1>Tambah Barang Baru</h1>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Barang:</label>
            <input type="text" name="NamaBarang" required>
        </div>
        <div>
            <label>Satuan:</label>
            <input type="text" name="Satuan" required>
        </div>
        <div>
            <label>Harga Satuan:</label>
            <input type="number" name="HargaSatuan" required>
        </div>
        <div>
            <label>Stok:</label>
            <input type="number" name="Stok" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection
