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
            $table->unsignedBigInteger("OrangTua_id")->index();
            $table->unsignedBigInteger("Wali_id")->index();
            $table->string("Nama Lengkap",255);
            $table->string("Nama Panggilan",50);
            $table->bigInteger("NIK");
            $table->bigInteger("No_Kartu Keluarga");
            $table->bigInteger("No_Kartu Akta Lahir");
            $table->string("Tempat",50);
            $table->date("Tanggal Lahir");
            $table->string("Kewarganegaraan",100);
            $table->string("Berkebutuhan Khusus",100);
            $table->string("Jenis Kelamin",10);
            $table->integer("Usia");
            $table->string("Alamat Tempat Tinggal",255);
            $table->integer("RT");
            $table->integer("RW");
            $table->string("Desa",50);
            $table->string("Kecamatan",50);
            $table->bigInteger("lintang");
            $table->bigInteger("bujur");
            $table->string("Tempat Tinggal",50);
            $table->string("Alat Transportasi",100);
            $table->bigInteger("No_Hp");
            $table->string("Email Anak");
            $table->string("Agama",50);
            $table->string("Hobi",50);
            $table->string("Cita-cita",50);
            $table->integer("Anak ke");
            $table->integer("Jumlah Saudara Kandung");
            $table->string("Bahasa Sehari-hari");
            $table->integer("Tinggi Badan");
            $table->integer("Berat Badan");
            $table->string("Asal TK/RA/SD/MI",255);
            $table->string("NPSN TK/RA/SD/MI",255);
            $table->bigInteger("NISN");
            $table->string("KPS/PKH",30);
            $table->string("KIP",30);
            $table->string("PIP",30);
            $table->string("Diterima di Kelas",30);
            $table->date("Tanggal Mendaftar");
            $table->timestamps();

            $table->foreign("OrangTua_id")->references("id")->on("orang_tuas")->onDelete("cascade");
            $table->foreign("Wali_id")->references("id")->on("walis")->onDelete("cascade");

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