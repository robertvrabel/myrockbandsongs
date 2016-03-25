<?php

use App\Repositories\TypeRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('types')->truncate();

        // Initialize Repository
        $types = new TypeRepository(new Container);

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 10;

        // Fake it!
        for($i=0; $i < $run; $i++) {
            $types->create([
                'is_active' => 1,
                'is_disc' => rand(0, 1),
                'display_order' => $i +1,
                'type' => $faker->word,
                'type_long' => $faker->sentence($nbWords = 3),
                'define_name' => strtolower($faker->word)
            ]);
        }
    }
}