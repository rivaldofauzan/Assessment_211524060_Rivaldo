@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="my-4">Daftar Kasir</h2>
            <a href="{{ route('kasir.create') }}" class="btn btn-primary mb-3">Tambah Kasir Baru</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Kasir</th>
                            <th>Nama</th>
                            <th>HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kasirs as $kasir)
                            <tr>
                                <td>{{ $kasir->KodeKasir }}</td>
                                <td>{{ $kasir->Nama }}</td>
                                <td>{{ $kasir->HP }}</td>
                                <td>
                                    <a href="{{ route('kasir.edit', $kasir->KodeKasir) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('kasir.destroy', $kasir->KodeKasir) }}" method="POST" style="display:inline;">
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
