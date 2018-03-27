<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();

        for ($i = 0; $i < 20; $i++) {
            Country::create([
                'name' => 'Country ' . $i
            ]);
        }
    }
}
