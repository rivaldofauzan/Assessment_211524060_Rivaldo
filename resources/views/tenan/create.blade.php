@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="my-4">Tambah Tenan Baru</h2>
            <form action="{{ route('tenan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="NamaTenan">Nama Tenan:</label>
                    <input type="text" class="form-control" id="NamaTenan" name="NamaTenan" required>
                </div>
                <div class="form-group">
                    <label for="HP">Nomor HP:</label>
                    <input type="text" class="form-control" id="HP" name="HP" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('tenan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
