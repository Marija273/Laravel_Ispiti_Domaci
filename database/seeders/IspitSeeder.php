<?php

namespace Database\Seeders;

use App\Models\Ispit;
use Illuminate\Database\Seeder;

class IspitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ispit::factory()->count(50)->create();
    }
}
