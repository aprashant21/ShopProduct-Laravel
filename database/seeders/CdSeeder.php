<?php

namespace Database\Seeders;

use App\Models\Cd;
use Illuminate\Database\Seeder;

class CdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cd::factory()->times(10)->create();
    }
}
