<?php

use App\Repositories\PackRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class PackTableSeeder extends Seeder {

    public function run()
    {
        DB::table('packs')->truncate();

        // Initialize Repository
        $packs = new PackRepository(new Container);

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 100;

        // Fake it!
        for($i=0; $i < $run; $i++) {
            $packs->create([
                'pack' => $faker->sentence($nbWords = 4)
            ]);
        }
    }
}