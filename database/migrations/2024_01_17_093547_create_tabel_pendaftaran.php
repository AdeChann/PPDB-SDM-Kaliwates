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
        Schema::create('tabel_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('tanggal_pendaftaran',20)->required();;
            $table->string('nama_lengkap',100)->required();
            $table->string('nama_panggilan',10)->required();
            $table->date('tanggal_lahir',50)->date('d-m-Y')->required();;
            $table->string('tempat_lahir',50)->required();
            $table->string('jenis_kelamin',15)->required();;
            $table->string('alamat',50)->required();;
            $table->string('kecamatan',50)->required();;
            $table->string('kabupaten',50)->required();;
            $table->string('provinsi',50)->required();;
            $table->integer('kode_pos',20)->required();;
            $table->string('nomor_telepon',20)->required();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pendaftaran');
    }
};