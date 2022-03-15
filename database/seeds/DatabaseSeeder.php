<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Seed fake data in users table
        factory(App\User::class, 20)->create();
        //Seed fake data in communities table
        factory(App\Community::class, 20)->create();
    }
}
