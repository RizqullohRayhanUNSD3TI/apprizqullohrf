<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->enum('gender', ['Laki-laki','Perempuan']);
            $table->string('alamat');
            $table->enum('status', ['Belum Menikah','Menikah','Cerai']);
            $table->string('pekerjaan');
            $table->enum('kewarganegaraan', ['WNI','WNA']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('goldar', ['A','B','O','AB']);
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
        Schema::dropIfExists('penduduk');
    }
}
