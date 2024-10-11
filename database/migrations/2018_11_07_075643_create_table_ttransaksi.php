<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTtransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttransaksi', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('NoPinjam');
            $table->date('TglPinjam');
            $table->integer('NoAnggota');
            $table->integer('NoBuku');
            $table->integer('JmlhBuku');
            $table->date('TglHrsKembali');
            $table->date('TglKembali');
            $table->string('Keterangan');
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
        Schema::dropIfExists('ttransaksi');
    }
}
