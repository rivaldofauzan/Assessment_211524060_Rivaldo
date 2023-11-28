<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;
use Carbon\Carbon;

class KasirController extends Controller
{
    // Menampilkan daftar kasir
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasir.index', compact('kasirs'));
    }

    // Menampilkan form untuk membuat kasir baru
    public function create()
    {
        return view('kasir.create');
    }

    // Menyimpan kasir baru
    public function store(Request $request)
    {
        $tanggalSekarang = "211524060";
        $kodeAwal = 'KS' . $tanggalSekarang;

        $jumlahKasirHariIni = Kasir::where('KodeKasir', 'like', $kodeAwal . '%')->count();


        $kodeBaru = $kodeAwal . str_pad($jumlahKasirHariIni + 1, 2, '0', STR_PAD_LEFT);

        $kasir = new Kasir();
        $kasir->KodeKasir = $kodeBaru;
        $kasir->Nama = $request->input('Nama');
        $kasir->HP = $request->input('HP');
        $kasir->save();

        return redirect()->route('kasir.index');
    }

    // Menampilkan form untuk mengedit kasir
    public function edit($KodeKasir)
    {
        $kasir = Kasir::findOrFail($KodeKasir);
        return view('kasir.edit', compact('kasir'));
    }

    // Memperbarui kasir
    public function update(Request $request, $KodeKasir)
    {
        Kasir::findOrFail($KodeKasir)->update($request->all());
        return redirect()->route('kasir.index');
    }

    // Menghapus kasir
    public function destroy($KodeKasir)
    {
        Kasir::findOrFail($KodeKasir)->delete();
        return redirect()->route('kasir.index');
    }
}
