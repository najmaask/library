<?php

use Illuminate\Database\Seeder;

class seed_ttransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ttransaksi')->insert([
        	'NoPinjam'=>'2',
        	'TglPinjam'=>'2018-03-08',
        	'NoAnggota'=>'5',
        	'NoBuku'=>'4',
        	'JmlhBuku'=>'7',
        	'TglHrsKembali'=>'2018-01-17',
        	'TglKembali'=>'2018-02-18',
            'Keterangan'=>'Telat'
        ]);
        DB::table('ttransaksi')->insert([
            'NoPinjam'=>'3',
            'TglPinjam'=>'2017-12-23',
            'NoAnggota'=>'3',
            'NoBuku'=>'3',
            'JmlhBuku'=>'7',
            'TglHrsKembali'=>'2018-01-01',
            'TglKembali'=>'2018-01-01',
            'Keterangan'=>'Tepat Waktu'
        ]);
        DB::table('ttransaksi')->insert([
            'NoPinjam'=>'4',
            'TglPinjam'=>'2018-01-31',
            'NoAnggota'=>'1',
            'NoBuku'=>'2',
            'JmlhBuku'=>'4',
            'TglHrsKembali'=>'2018-02-04',
            'TglKembali'=>'2018-02-06',
            'Keterangan'=>'Telat'
        ]);
        DB::table('ttransaksi')->insert([
            'NoPinjam'=>'5',
            'TglPinjam'=>'2018-10-10',
            'NoAnggota'=>'3',
            'NoBuku'=>'2',
            'JmlhBuku'=>'8',
            'TglHrsKembali'=>'2018-10-17',
            'TglKembali'=>'2018-10-18',
            'Keterangan'=>'Telat'
        ]);
    }
}
