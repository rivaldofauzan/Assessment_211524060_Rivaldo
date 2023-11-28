@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="my-4">Tambah Kasir Baru</h2>
            <form action="{{ route('kasir.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" required>
                </div>
                <div class="form-group">
                    <label for="HP">Nomor HP:</label>
                    <input type="text" class="form-control" id="HP" name="HP" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('kasir.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
