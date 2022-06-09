<?php

namespace Database\Seeders;

use App\Models\Katedra;
use Illuminate\Database\Seeder;

class KatedraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Katedra::factory()->count(10)->create();
    }
}
