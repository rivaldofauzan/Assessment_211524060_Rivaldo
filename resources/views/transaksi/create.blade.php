@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Transaksi Baru</h2>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <!-- Form fields untuk data transaksi -->
        <!-- Tambahkan field untuk KodeTenan, KodeKasir, dan lainnya -->

        <!-- Bagian untuk menambahkan barang ke dalam transaksi -->
        <div id="barang-form-list">
            <h3>Barang</h3>
            <!-- Contoh form untuk satu barang, duplikat ini untuk menambahkan lebih banyak barang -->
            <div>
                <select name="barang[0][KodeBarang]">
                    @foreach ($barang as $item)
                        <option value="{{ $item->KodeBarang }}">{{ $item->NamaBarang }}</option>
                    @endforeach
                </select>
                <input type="number" name="barang[0][Jumlah]" placeholder="Jumlah">
                <input type="number" name="barang[0][Harga]" placeholder="Harga">
            </div>
            <!-- Tambahkan JavaScript untuk menambahkan lebih banyak form barang di sini -->
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
