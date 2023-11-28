@extends('layouts.app')

@section('content')
    <h2>Edit Tenan</h2>
    <form action="{{ route('tenan.update', $tenan->KodeTenan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NamaTenan">Nama:</label>
            <input type="text" class="form-control" id="NamaTenan" name="NamaTenan" value="{{ $tenan->NamaTenan }}" required>
        </div>
        <div class="form-group">
            <label for="HP">HP:</label>
            <input type="text" class="form-control" id="HP" name="HP" value="{{ $tenan->HP }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
