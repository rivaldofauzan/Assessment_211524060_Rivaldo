<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenan;
use Carbon\Carbon;

class TenanController extends Controller
{
    // Menampilkan daftar Tenan
    public function index()
    {
        $tenans = Tenan::all();
        return view('tenan.index', compact('tenans'));
    }

    // Menampilkan form untuk membuat tenan baru
    public function create()
    {
        return view('tenan.create');
    }

    // Menyimpan tenan baru
    public function store(Request $request)
    {
        $tanggalSekarang = "211524060";
        $kodeAwal = 'TK' . $tanggalSekarang;

        $jumlahTenanHariIni = Tenan::where('KodeTenan', 'like', $kodeAwal . '%')->count();


        $kodeBaru = $kodeAwal . str_pad($jumlahTenanHariIni + 1, 2, '0', STR_PAD_LEFT);

        $tenan = new Tenan();
        $tenan->KodeTenan = $kodeBaru;
        $tenan->NamaTenan = $request->input('NamaTenan');
        $tenan->HP = $request->input('HP');
        $tenan->save();

        return redirect()->route('tenan.index');
    }

    // Menampilkan form untuk mengedit tenan
    public function edit($KodeTenan)
    {
        $tenan = Tenan::findOrFail($KodeTenan);
        return view('tenan.edit', compact('tenan'));
    }

    // Memperbarui tenan
    public function update(Request $request, $KodeTenan)
    {
        Tenan::findOrFail($KodeTenan)->update($request->all());
        return redirect()->route('tenan.index');
    }

    // Menghapus tenan
    public function destroy($KodeTenan)
    {
        Tenan::findOrFail($KodeTenan)->delete();
        return redirect()->route('tenan.index');
    }
}
