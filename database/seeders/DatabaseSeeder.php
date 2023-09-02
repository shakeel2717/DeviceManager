<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Number;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->name = 'Administrator';
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt("asdfasdf");
        $user->save();


        $country = new Country();
        $country->name = 'Pakistan';
        $country->flag = 'https://flagcdn.com/w160/pk.png';
        $country->description = "The country is far from the rest of the world, but it is a mistake to think that everything is upside down. The websites of Australian companies have an unusual design for us, but this is due to the fact that they have taken a different path to improve the work on the Internet.";
        $country->save();
    }
}
