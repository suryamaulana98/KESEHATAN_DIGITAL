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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('id_kelas')->nullable();
            $table->foreign('id_kelas')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('role')->default('user');
            $table->string('nis')->nullable();
            $table->string('nisn')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('foto')->nullable();
            $table->enum('jenis_kelamin', ['Laki - Laki','Perempuan'])->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('lingkar_kepala')->nullable();
            $table->string('jarak_rumah')->nullable();
            $table->string('waktu_tempuh')->nullable();
            $table->string('jumlah_saudara')->nullable();
            $table->enum('d_vaksin', ['Vaksin Pertama','Vaksin Kedua','Vaksin Ketiga'])->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
