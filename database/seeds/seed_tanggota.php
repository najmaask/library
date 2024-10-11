<?php

use Illuminate\Database\Seeder;

class seed_tanggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tanggota')->insert([
            'NoAnggota'=>'3',
            'NamaAnggota'=>'Catty',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'2002-08-04',
            'Kelas'=>'X B RPL'
        ]);
        DB::table('tanggota')->insert([
            'NoAnggota'=>'4',
            'NamaAnggota'=>'Najwa',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'2003-05-17',
            'Kelas'=>'X B RPL'
        ]);
        DB::table('tanggota')->insert([
            'NoAnggota'=>'5',
            'NamaAnggota'=>'Nasywa',
            'TempatLahir'=>'Jerman',
            'TglLahir'=>'2002-06-01',
            'Kelas'=>'XI B RPL'
        ]);
        DB::table('tanggota')->insert([
            'NoAnggota'=>'6',
            'NamaAnggota'=>'Nayla',
            'TempatLahir'=>'Jakarta',
            'TglLahir'=>'2001-08-01',
            'Kelas'=>'XI B RPL'
        ]);
    }
}
