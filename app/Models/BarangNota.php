<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    use HasFactory;

    protected $table = 'barangnota'; // Nama tabel di database

    // Jika primaryKey Anda bukan 'id'
    protected $primaryKey = 'KodeNota'; // atau apa pun kunci utamanya

    public $incrementing = false; // Non-aktifkan auto-increment jika kunci utama Anda bukan integer
    protected $keyType = 'string'; // Tipe data kunci utama (misalnya, string jika menggunakan kode)

    // Tentukan kolom apa saja yang bisa diisi
    protected $fillable = ['KodeNota', 'KodeBarang', 'JumlahBarang', 'HargaSatuan', 'Jumlah'];

    // Tambahkan hubungan ke model Nota jika diperlukan
    public function nota()
    {
        return $this->belongsTo(Nota::class, 'KodeNota', 'KodeNota');
    }
}
