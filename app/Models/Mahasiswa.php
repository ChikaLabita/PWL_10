<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model //Definisi Model
{
    use HasFactory;
    protected $table="mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected  $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'Nim',
        'Nama',
        'kelas_id',
        'Jurusan',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
