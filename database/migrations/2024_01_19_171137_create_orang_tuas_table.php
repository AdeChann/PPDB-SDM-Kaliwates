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
        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->string("Nama Ayah Kandung",255);
            $table->bigInteger("Nik Ayah");
            $table->string("Tempat(Ayah)",100);
            $table->date("Tanggal Lahir(Ayah)");
            $table->string("Pendidikan Terakhir(Ayah)",255);
            $table->string("Pekerjaan(Ayah)",100);
            $table->bigInteger("Penghasilan per bulan(Ayah)",);
            $table->string("Berkebutuhan Khusus(Ayah)",100);
            $table->string("Alamat(Ayah)",255)->nullable();
            $table->bigInteger("No Hp(Ayah)");
            $table->string("Nama Ibu Kandung",255);
            $table->string("NIK Ibu",255);
            $table->string("Tempat(Ibu)",100);
            $table->date("Tanggal (Ibu)");
            $table->string("Pendidikan Terakhir(Ibu)",255);
            $table->string("Pekerjaan(Ibu)",100);
            $table->bigInteger("Penghasilan Per Bulan(Ibu)");
            $table->string("Berkebutuhan Khusus(Ibu)");
            $table->string("Alamat(Ibu)",255)->nullable();
            $table->bigInteger("No Hp(Ibu)");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tuas');
    }
};