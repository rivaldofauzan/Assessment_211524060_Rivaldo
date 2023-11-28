<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $table = 'kasir'; // Nama tabel di database
    protected $primaryKey = 'KodeKasir'; // Kunci utama tabel
    public $incrementing = false; // Non-aktifkan auto-increment jika kunci utama Anda bukan integer
    protected $keyType = 'string'; // Tipe data kunci utama (misalnya, string jika menggunakan kode)
    protected $fillable = ['KodeKasir', 'Nama', 'HP']; // Daftar kolom yang dapat diisi
}

