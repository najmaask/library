<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(seed_santri::class);
        $this->call(seed_tanggota::class);
        $this->call(seed_tbuku::class);
        $this->call(seed_tpetugas::class);
        $this->call(seed_ttransaksi::class);
    }
}
