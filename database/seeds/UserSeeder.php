<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => "Norbert",
            'email' => "test@test.test",
            'password'=>"azertyuiop",
            "profil"=>"images/kakapo.png",
            "fond"=>"images/vert.png",

            ]);
    }
}
