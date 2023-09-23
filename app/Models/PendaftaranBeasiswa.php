<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranBeasiswa extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_beasiswa';
    protected $fillable = ['mahasiswa_id', 'beasiswa_id', 'keterangan', 'dokumen', 'status'];

    // Definisi relasi ke model Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    // Definisi relasi ke model Beasiswa
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'beasiswa_id');
    }
}
