<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;
    protected $table = 'orang_tuas';
    protected $fillable = [
    'nama_ayah_kandung',
    'nik_ayah',
    'tempat_ayah',
    'tanggal_lahir_ayah',
    'pendidikan_terakhir_ayah',
    'pekerjaan_ayah',
    'penghasilan_per_bulan_ayah',
    'berkebutuhan_khusus_ayah',
    'alamat_ayah',
    'no_hp_ayah',
    'nama_ibu_kandung',
    'nik_ibu',
    'tempat_ibu',
    'tanggal_lahir_ibu',
    'pendidikan_terakhir_ibu',
    'pekerjaan_ibu',
    'penghasilan_per_bulan_ibu',
    'berkebutuhan_khusus_ibu',
    'alamat_ayah',
    'no_hp_ibu',

];
public function anaks(){
    return $this->hasMany(Anak::class);
}
}