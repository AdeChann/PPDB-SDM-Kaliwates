<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    protected $table = 'walis';
    protected $fillable = [
    'nama_wali',
    'nik_wali',
    'tempat',
    'tanggal_lahir',
    'pendidikan_terakhir',
    'pekerjaan',
    'penghasilan_per_bulan',
    'alamat_wali',
    'no_hp_wali',

];
public function anaks(){
    return $this->hasMany(Anak::class);
}
}