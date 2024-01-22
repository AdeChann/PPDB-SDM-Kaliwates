<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Anak;
class PendaftaranController extends Controller
{
    public function showForm()
    {
        return view('.pendaftaran.pendaftaran');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:50',
            'nik' => 'required|numeric',
            'no_kartu_keluarga' => 'required|numeric',
            'no_kartu_akta_lahir' => 'required|numeric',
            'tempat' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'kewarganegaraan' => 'required|string|max:100',
            'berkebutuhan_khusus' => 'required|string|max:100',
            'jenis_kelamin' => 'required|string|max:10',
            'usia' => 'required|numeric',
            'alamat_tempat_tinggal' => 'required|string|max:255',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'desa' => 'required|string|max:50',
            'kecamatan' => 'required|string|max:50',
            'lintang' => 'required|numeric',
            'bujur' => 'required|numeric',
            'tempat_tinggal' => 'required|string|max:50',
            'alat_transportasi' => 'required|string|max:100',
            'no_hp' => 'required|numeric',
            'email_anak' => 'required|email',
            'agama' => 'required|string|max:50',
            'hobi' => 'required|string|max:50',
            'cita_cita' => 'required|string|max:50',
            'anak_ke' => 'required|numeric',
            'jumlah_saudara_kandung' => 'required|numeric',
            'bahasa_sehari_hari' => 'required|string|max:255',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'asal_tk_ra_sd_mi' => 'required|string|max:255',
            'npsn_tk_ra_sd_mi' => 'required|string|max:255',
            'nisn' => 'required|numeric',
            'kps_pkh' => 'required|string|max:30',
            'kip' => 'required|string|max:30',
            'pip' => 'required|string|max:30',
            'diterima_di_kelas' => 'required|string|max:30',
            'tanggal_mendaftar' => 'required|date',
        ]);

        try {
            // Simpan data ke dalam database
            Anak::create($validatedData);

            // Jika berhasil, redirect dengan pesan sukses
            return redirect()->route('form')->with('success', 'Data anak berhasil disubmit!');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, redirect dengan pesan error
            return redirect()->route('form')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
