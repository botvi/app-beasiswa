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
        Schema::create('pendaftaran_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer("mahasiswa_id");
            $table->integer("beasiswa_id");
            $table->text("keterangan");
            $table->string("dokument");
            $table->string('status');
            $table->text("catatan")->nullable();
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
        Schema::dropIfExists('pendaftaran_beasiswa');
    }
};
