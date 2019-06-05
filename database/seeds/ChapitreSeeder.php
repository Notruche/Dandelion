<?php

use Illuminate\Database\Seeder;
use App\Chapitre;

class ChapitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chapitre::create([

            'num' => "1",
            'image' => "images/episode1.png",

            ]);
    }
}
