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
            $table->string("nama_ayah_kandung",255);
            $table->bigInteger("nik_ayah");
            $table->string("tempat_ayah",100);
            $table->date("tanggal_lahir_ayah");
            $table->string("pendidikan_terakhir_ayah",255);
            $table->string("pekerjaan_ayah",100);
            $table->bigInteger("penghasilan_per_bulan_ayah",);
            $table->string("berkebutuhan_khusus_ayah",100);
            $table->string("alamat_ayah",255)->nullable();
            $table->bigInteger("no_hp_ayah");
            $table->string("nama_ibu_kandung",255);
            $table->string("nik_ibu",255);
            $table->string("tempat_ibu",100);
            $table->date("tanggal_ibu)");
            $table->string("pendidikan_terakhir_ibu",255);
            $table->string("pekerjaan_ibu",100);
            $table->bigInteger("penghasilan_per_bulan_ibu");
            $table->string("berkebutuhan_khusus_ibu");
            $table->string("alamat_ibu",255)->nullable();
            $table->bigInteger("no_hp_ibu");
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
