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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('ttl');
            $table->string('agama');
            $table->string('warga_negara');
            $table->integer('jlh_saudara');
            $table->string('alamat_siswa');
            $table->string('nama_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali');
            $table->string('pendidikan_wali');
            $table->string('pekerjaan_wali');
            $table->string('alamat_orangtua');
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('kartu');
            $table->string('no_ijazah');
            $table->integer('nisn');
            $table->string('telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};