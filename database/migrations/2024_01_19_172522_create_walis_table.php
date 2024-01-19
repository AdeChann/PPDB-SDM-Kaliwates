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
            $table->string("Nama Wali",255);
            $table->bigInteger("NIK Wali");
            $table->string("Tempat",100);
            $table->date("Tanggal Lahir");
            $table->string("Pendidikan Terakhir",255);
            $table->string("Pekerjaan",100);
            $table->bigInteger("Penghasilan per bulan");
            $table->string("Alamat",255)->nullable();
            $table->bigInteger("No Hp");
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