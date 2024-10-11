<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTbuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbuku', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('NoBuku');
            $table->string('JudulBuku');
            $table->string('Penerbit');
            $table->date('TahunBuku');
            $table->string('Kategori');
            $table->integer('StokBuku');
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
        Schema::dropIfExists('tbuku');
    }
}
