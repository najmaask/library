<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTanggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggota', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('NoAnggota');
            $table->string('NamaAnggota');
            $table->string('TempatLahir');
            $table->date('TglLahir');
            $table->string('Kelas');
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
        Schema::dropIfExists('tanggota');
    }
}
