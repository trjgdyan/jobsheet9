<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Mahasiswa extends Model
{
    // use HasFactory;
    protected $table = 'mahasiswas';
    protected $primaryKey = 'Nim';
    protected $fillable = [
        'Nim',
        'Nama',
        'Jurusan',
        'No_Handphone',
        'kelas_id',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
