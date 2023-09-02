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

    }
}
