<?php

namespace Database\Seeders;

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
        $ks = new KatedraSeeder();
        $ps = new ProfesorSeeder();
        $is = new IspitSeeder();
        $ks->run();
        $ps->run();
        $is->run();
    }
}
