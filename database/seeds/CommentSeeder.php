<?php

use Illuminate\Database\Seeder;
use App\Commentaire;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commentaire::create([

            'content' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. ",
            'date' => "03 nov 2017",

            ]);
    }
}
