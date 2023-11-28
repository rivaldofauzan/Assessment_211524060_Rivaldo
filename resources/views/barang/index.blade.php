@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="my-4">Daftar Barang</h2>
            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang Baru</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->KodeBarang }}</td>
                                <td>{{ $item->NamaBarang }}</td>
                                <td>{{ $item->Satuan }}</td>
                                <td>{{ $item->HargaSatuan }}</td>
                                <td>{{ $item->Stok }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', $item->KodeBarang) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('barang.destroy', $item->KodeBarang) }}" method="POST" style="display:inline;">
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
