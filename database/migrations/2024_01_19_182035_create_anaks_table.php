<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orangtua_id")->index();
            $table->unsignedBigInteger("wali_id")->index();
            $table->string("nama_lengkap",255);
            $table->string("nama_panggilan",50);
            $table->bigInteger("nik");
            $table->bigInteger("no_kartu_keluarga");
            $table->bigInteger("no_Kartu_Akta_Lahir");
            $table->string("tempat",50);
            $table->date("tanggal_lahir");
            $table->string("kewarganegaraan",100);
            $table->string("berkebutuhan_khusus",100);
            $table->string("jenis_kelamin",10);
            $table->integer("usia");
            $table->string("alamat_tempat_tinggal",255);
            $table->integer("rt");
            $table->integer("rw");
            $table->string("desa",50);
            $table->string("kecamatan",50);
            $table->bigInteger("lintang");
            $table->bigInteger("bujur");
            $table->string("tempat_tinggal",50);
            $table->string("alat_transportasi",100);
            $table->bigInteger("no_hp");
            $table->string("email_anak");
            $table->string("agama",50);
            $table->string("hobi",50);
            $table->string("cita_cita",50);
            $table->integer("anak_ke");
            $table->integer("jumlah_saudara_kandung");
            $table->string("Bahasa_sehari_hari");
            $table->integer("tinggi_badan");
            $table->integer("berat_badan");
            $table->string("asal_tk_ra_sd_mi",255);
            $table->string("npsn_tk_ra_sd_mi",255);
            $table->bigInteger("nisn");
            $table->string("penerima_kps_kph",30);
            $table->string("kip",30);
            $table->string("pip",30);
            $table->string("diterima_di_kelas",30);
            $table->date("tanggal_mendaftar");
            $table->timestamps();

            $table->foreign("orangtua_id")->references("id")->on("orang_tuas")->onDelete("cascade");
            $table->foreign("wali_id")->references("id")->on("walis")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anaks');
    }
};