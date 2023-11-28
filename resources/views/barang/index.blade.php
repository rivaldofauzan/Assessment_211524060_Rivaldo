@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <!-- ... -->
</head>
<body>
    <div class="py-6">
        <h1 class="text-2xl font-semibold mb-4">Daftar Barang</h1>
        <a href="{{ route('barang.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Tambah Barang Baru</a>

        <div class="mt-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Barang</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Barang</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Satuan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga Satuan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($barang as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->KodeBarang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->NamaBarang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->Satuan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->HargaSatuan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->Stok }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('barang.edit', $item->KodeBarang) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                            <form action="{{ route('barang.destroy', $item->KodeBarang) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

@endsection
