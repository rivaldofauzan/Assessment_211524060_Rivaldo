@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="my-4">Daftar Tenan</h2>
            <a href="{{ route('tenan.create') }}" class="btn btn-primary mb-3">Tambah Tenan Baru</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Tenan</th>
                            <th>Nama</th>
                            <th>HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tenans as $tenan)
                            <tr>
                                <td>{{ $tenan->KodeTenan }}</td>
                                <td>{{ $tenan->NamaTenan }}</td>
                                <td>{{ $tenan->HP }}</td>
                                <td>
                                    <a href="{{ route('tenan.edit', $tenan->KodeTenan) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('tenan.destroy', $tenan->KodeTenan) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
