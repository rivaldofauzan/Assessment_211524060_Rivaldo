<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Carbon\Carbon;

class BarangController extends Controller
{
    // Menampilkan daftar barang
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    // Menampilkan form untuk membuat barang baru
    public function create()
    {
        return view('barang.create');
    }

    // Menyimpan barang baru
    public function store(Request $request)
    {
        $nim = '211524060';
        $kodeAwal = 'BRG' . $nim;

        // Hitung jumlah barang yang sudah terdaftar hari ini
        $jumlahBarangHariIni = Barang::where('KodeBarang', 'like', $kodeAwal . '%')->count();

        // Buat kode barang baru
        $kodeBaru = $kodeAwal . str_pad($jumlahBarangHariIni + 1, 2, '0', STR_PAD_LEFT);

        // Buat barang baru dengan kode tersebut
        $barang = new Barang();
        $barang->KodeBarang = $kodeBaru;
        $barang->NamaBarang = $request->input('NamaBarang');
        $barang->Satuan = $request->input('Satuan');
        $barang->HargaSatuan = $request->input('HargaSatuan');
        $barang->Stok = $request->input('Stok');
        $barang->save();

        return redirect()->route('barang.index');
    }

    // Menampilkan form untuk mengedit barang
    public function edit($KodeBarang)
    {
        $barang = Barang::findOrFail($KodeBarang);
        return view('barang.edit', compact('barang'));
    }

    // Memperbarui barang
    public function update(Request $request, $KodeBarang)
    {
        Barang::findOrFail($KodeBarang)->update($request->all());
        return redirect()->route('barang.index');
    }

    // Menghapus barang
    public function destroy($KodeBarang)
    {
        Barang::findOrFail($KodeBarang)->delete();
        return redirect()->route('barang.index');
    }
}
