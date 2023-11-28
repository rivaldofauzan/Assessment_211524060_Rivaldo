<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'nota'; // Nama tabel di database

    // Jika primaryKey Anda bukan 'id'
    protected $primaryKey = 'KodeNota'; // atau apa pun kunci utamanya

    public $incrementing = false; // Non-aktifkan auto-increment jika kunci utama Anda bukan integer
    protected $keyType = 'string'; // Tipe data kunci utama (misalnya, string jika menggunakan kode)

    // Tentukan kolom apa saja yang bisa diisi
    protected $fillable = ['KodeNota', 'KodeTenan', 'KodeKasir', 'TglNota', 'JamNota', 'JumlahBelanja', 'Diskon', 'Total'];

    // Tambahkan hubungan ke model lain jika diperlukan
    // Misalnya, jika Nota memiliki banyak BarangNota
    public function barangNota()
    {
        return $this->hasMany(BarangNota::class, 'KodeNota', 'KodeNota');
    }
     public static function generateKodeNota()
    {
        // Ambil KodeNota terbaru dari database
        $latestNota = Nota::orderBy('KodeNota', 'desc')->first();

        // Jika tidak ada KodeNota sebelumnya, inisialisasi dengan 1
        $nextKodeNota = $latestNota ? $latestNota->KodeNota + 1 : 1;

        // Format KodeNota sesuai kebutuhan (misal: "NOTA0001")
        return sprintf("NOTA%04d", $nextKodeNota);
    }
}
