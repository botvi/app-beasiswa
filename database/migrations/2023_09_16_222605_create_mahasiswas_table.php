<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nim', 10)->unique();
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 10);
            $table->date('tanggal_lahir');
            $table->string('alamat', 255);
            $table->string('telepon', 15);
            $table->string('program_studi', 50);
            $table->integer('semester');
            $table->decimal('ipk', 3, 2);
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
