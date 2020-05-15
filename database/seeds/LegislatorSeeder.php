<?php

use Illuminate\Database\Seeder;

class LegislatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Legislator::class, 10)->create();
    }
}
