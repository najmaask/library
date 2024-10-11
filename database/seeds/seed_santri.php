<?php

use Illuminate\Database\Seeder;

class seed_santri extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('santri')->insert([
            'NoSantri'=>'3',
            'NamaSantri'=>'Catty',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'2002-08-04',
            'Kelas'=>'X B RPL'
        ]);
        DB::table('santri')->insert([
            'NoSantri'=>'4',
            'NamaSantri'=>'Najwa',
            'TempatLahir'=>'Cianjur',
            'TglLahir'=>'2003-05-17',
            'Kelas'=>'X B RPL'
        ]);
        DB::table('santri')->insert([
            'NoSantri'=>'5',
            'NamaSantri'=>'Nasywa',
            'TempatLahir'=>'Jerman',
            'TglLahir'=>'2002-06-01',
            'Kelas'=>'XI B RPL'
        ]);
        DB::table('santri')->insert([
            'NoSantri'=>'6',
            'NamaSantri'=>'Nayla',
            'TempatLahir'=>'Jakarta',
            'TglLahir'=>'2001-08-01',
            'Kelas'=>'XI B RPL'
        ]);
    }
}
