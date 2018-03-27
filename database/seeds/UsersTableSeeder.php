<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        for ($i = 0; $i < 20; $i++) {
            User::create([
                'country_id' => $i,
                'name' => 'User ' . $i
            ]);
        }
    }
}
