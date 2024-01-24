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
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nama_wali",255);
            $table->bigInteger("nik_wali");
            $table->string("tempat",100);
            $table->date("tanggal_lahir");
            $table->string("pendidikan_terakhir",255);
            $table->string("pekerjaan",100);
            $table->bigInteger("penghasilan_per_bulan");
            $table->string("alamat",255)->nullable();
            $table->bigInteger("no_hp");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
};
