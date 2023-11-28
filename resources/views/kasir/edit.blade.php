@extends('layouts.app')

@section('content')
    <h2>Edit Kasir</h2>
    <form action="{{ route('kasir.update', $kasir->KodeKasir) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $kasir->Nama }}" required>
        </div>
        <div class="form-group">
            <label for="HP">HP:</label>
            <input type="text" class="form-control" id="HP" name="HP" value="{{ $kasir->HP }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
