<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'beasiswa';
    protected $fillable = [
        'judul', 'deskripsi', 'sumber_beasiswa', 'jumlah_penerima',
        'tanggal_mulai', 'tanggal_selesai', 'brosur', 'status'
    ];

    // Definisi relasi One-to-Many ke model PendaftaranBeasiswa
    public function pendaftaranBeasiswa()
    {
        return $this->hasMany(PendaftaranBeasiswa::class, 'beasiswa_id')
            ->where('status', 'Diterima');
    }
}
