<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $table ='anaks';
    protected $fillable = [
        'orangtua_id',
        'wali_id',
        'nama_lengkap',
        'nama_panggilan',
        'nik',
        'no_kartu_keluarga',
        'no_kartu_akta_lahir',
        'tempat',
        'tanggal_lahir',
        'kewarganegaraan',
        'berkebutuhan_khusus',
        'jenis_kelamin',
        'usia',
        'alamat_tempat_tinggal',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'lintang',
        'bujur',
        'tempat_tinggal',
        'alat_transportasi',
        'no_hp',
        'email_anak',
        'agama',
        'hobi',
        'cita_cita',
        'anak_ke',
        'jumlah_saudara_kandung',
        'bahasa_sehari_hari',
        'tinggi_badan',
        'berat_badan',
        'asal_tk_ra_sd_mi',
        'npsn_tk_ra_sd_mi',
        'nisn',
        'kps_pkh',
        'kip',
        'pip',
        'diterima_di_kelas',
        'tanggal_mendaftar',
        // Tambahkan field sesuai dengan struktur tabel
    ];
    public function orang_tuas(){
        return $this->belongsTo(OrangTua::class, "orangtua_id");
    }

    public function wali(){
        return $this->belongsTo(Wali::class, "wali_id");
    }
}