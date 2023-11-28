<!-- resources/views/barang/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Update Barang')

@section('content')
    <h1>Edit Barang</h1>

    <form action="{{ route('barang.update', $barang->KodeBarang) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nama Barang:</label>
            <input type="text" name="NamaBarang" value="{{ $barang->NamaBarang }}" required>
        </div>
        <div>
            <label>Satuan:</label>
            <input type="text" name="Satuan" value="{{ $barang->Satuan }}" required>
        </div>
        <div>
            <label>Harga Satuan:</label>
            <input type="number" name="HargaSatuan" value="{{ $barang->HargaSatuan }}" required>
        </div>
        <div>
            <label>Stok:</label>
            <input type="number" name="Stok" value="{{ $barang->Stok }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
