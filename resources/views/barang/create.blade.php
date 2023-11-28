@extends('layouts.app')

@section('title', 'Tambah Barang Baru')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="my-4">Tambah Barang Baru</h2>
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="NamaBarang">Nama Barang:</label>
                    <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" required>
                </div>
                <div class="form-group">
                    <label for="Satuan">Satuan:</label>
                    <input type="text" class="form-control" id="Satuan" name="Satuan" required>
                </div>
                <div class="form-group">
                    <label for="HargaSatuan">Harga Satuan:</label>
                    <input type="number" class="form-control" id="HargaSatuan" name="HargaSatuan" required>
                </div>
                <div class="form-group">
                    <label for="Stok">Stok:</label>
                    <input type="number" class="form-control" id="Stok" name="Stok" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
