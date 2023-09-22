<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Nama tabel yang sesuai dengan migrasi

    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'program_studi',
        'fakultas',
        'semester',
        'ipk',
        'status',
    ];

    // Definisikan relasi antara Mahasiswa dan User (jika diperlukan)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
