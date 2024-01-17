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
        Schema::create('surat_izin', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('izin');
            $table->string('keterangan');
            $table->dateTime('tgl_ajuan')->nullable()->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_izin');
    }
};
