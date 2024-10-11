<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTpetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpetugas', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('NIK');
            $table->string('NamaPetugas');
            $table->string('TempatLahir');
            $table->date('TglLahir');
            $table->string('Alamat');
            $table->string('NoTelpon');
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
        Schema::dropIfExists('tpetugas');
    }
}
