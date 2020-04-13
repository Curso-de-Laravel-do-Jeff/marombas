<?php

use Illuminate\Database\Seeder;

class MarombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Repositories\Models\Maromba::class, 200)->create();
    }
}
