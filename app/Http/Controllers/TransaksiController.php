<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Models\BarangNota;
use App\Models\Barang;
use DB;

class TransaksiController extends Controller
{
    // Menampilkan form transaksi
    public function create()
    {
        $barang = Barang::all(); // Ambil data barang untuk dropdown
        return view('transaksi.create', compact('barang'));
    }

    // Menyimpan transaksi dan menghasilkan nota
public function store(Request $request)
{
    DB::transaction(function () use ($request) {
        $nota = new Nota();
        // Set nilai untuk Nota, sesuaikan dengan input form
        $nota->KodeTenan = $request->input('KodeTenan');
        $nota->KodeKasir = $request->input('KodeKasir');
        $nota->TglNota = now();
        $nota->JamNota = now();
        $nota->JumlahBelanja = 0; // Inisialisasi jumlah belanja

        // Simpan nota sementara untuk mendapatkan KodeNota
        $nota->save();

        foreach ($request->input('barang') as $key => $value) {
            $barangNota = new BarangNota();
            // Set nilai untuk BarangNota
            $barangNota->KodeNota = $nota->KodeNota;
            $barangNota->KodeBarang = $value['KodeBarang'];
            $barangNota->JumlahBarang = $value['Jumlah'];

            // Ambil harga satuan dari database berdasarkan KodeBarang
            $hargaSatuan = Barang::where('KodeBarang', $value['KodeBarang'])->value('HargaSatuan');
            $barangNota->HargaSatuan = $hargaSatuan;

            // Hitung jumlah berdasarkan harga satuan
            $jumlah = $value['Jumlah'] * $hargaSatuan;
            $barangNota->Jumlah = $jumlah;

            // Tambahkan jumlah ke jumlah belanja
            $nota->JumlahBelanja += $jumlah;

            $barangNota->save();

            // Update stok barang
            $barang = Barang::find($value['KodeBarang']);
            $barang->Stok -= $value['Jumlah'];
            $barang->save();
        }

        // Hitung total (mungkin berdasarkan diskon jika ada)
        $total = $nota->JumlahBelanja - $nota->Diskon;
        $nota->Total = $total;
        $nota->save();
    });

    return redirect()->route('transaksi.create')->with('success', 'Transaksi berhasil ditambahkan');
}

}
