<?php

use Illuminate\Database\Seeder;

class seed_tpetugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tpetugas')->insert([
        	'NIK'=>'120',
        	'NamaPetugas'=>'Mila',
        	'TempatLahir'=>'Cianjur',
        	'TglLahir'=>'1997-01-02',
        	'Alamat'=>'Cianjur',
        	'NoTelpon'=>'089276356'
        ]);
        DB::table('tpetugas')->insert([
            'NIK'=>'121',
            'NamaPetugas'=>'Najwa',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'1998-04-16',
            'Alamat'=>'Cianjur',
            'NoTelpon'=>'0899398844'
        ]);
        DB::table('tpetugas')->insert([
            'NIK'=>'122',
            'NamaPetugas'=>'Syifa',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'1991-09-15',
            'Alamat'=>'Cianjur',
            'NoTelpon'=>'0854532344'
        ]);
        DB::table('tpetugas')->insert([
            'NIK'=>'124',
            'NamaPetugas'=>'Asep',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'1996-02-08',
            'Alamat'=>'Cianjur',
            'NoTelpon'=>'084678787'
        ]);
        DB::table('tpetugas')->insert([
            'NIK'=>'125',
            'NamaPetugas'=>'Catty',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'1999-05-12',
            'Alamat'=>'Cianjur',
            'NoTelpon'=>'0894546574'
        ]);
    }
}
