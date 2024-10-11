<?php

use Illuminate\Database\Seeder;

class seed_tbuku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbuku')->insert([
        	'NoBuku'=>'2',
        	'JudulBuku'=>'Milea',
        	'Penerbit'=>'Gagasmedia',
        	'TahunBuku'=>'2016-06-22',
        	'Kategori'=>'Novel',
        	'StokBuku'=>'90'
        ]);
        DB::table('tbuku')->insert([
            'NoBuku'=>'3',
            'JudulBuku'=>'Dilan 1991',
            'Penerbit'=>'Gagasmedia',
            'TahunBuku'=>'2015-01-12',
            'Kategori'=>'Novel',
            'StokBuku'=>'65'
        ]);
        DB::table('tbuku')->insert([
            'NoBuku'=>'4',
            'JudulBuku'=>'Dilan 1990',
            'Penerbit'=>'Gagasmedia',
            'TahunBuku'=>'2016-02-20',
            'Kategori'=>'Novel',
            'StokBuku'=>'34'
        ]);

    }
}
