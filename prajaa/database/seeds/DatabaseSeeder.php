<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Concern;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['first_name' => 'Ryan', 'last_name' => 'Chenkie', 'email' => 'ryanchenkie@gmail.com', 'password' => Hash::make('user@123')],
            ['first_name' => 'Chris' , 'last_name' => 'Sevilleja', 'email' => 'chris@scotch.io', 'password' => Hash::make('user@123')],
            ['first_name' => 'Holly' , 'last_name' => 'Lloyd', 'email' => 'holly@scotch.io', 'password' => Hash::make('user@123')],
            ['first_name' => 'Adnan' , 'last_name' => 'Kukic', 'email' => 'adnan@scotch.io', 'password' => Hash::make('user@123')],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }


        DB::table('concerns')->delete();

        $concerns = array(
            ['description' => 'my first concern', 'url_id' => 'e13e4860-9c45-11e5-9d9d-0002a5d5c51b', 'user_id' => 1]
        );

        foreach ($concerns as $concern)
        {
            Concern::create($concern);
        }


        Model::reguard();
    }
}
