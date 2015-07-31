<?php

use App\Repositories\BookletRepository;
use App\Repositories\UserRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class BookletTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('booklets')->truncate();

        // Initialize Repository
        $booklets = new BookletRepository(new Container);

        // Create a new faker object
        $faker = Faker\Factory::create();

        // Get a list of all the users
        $users = new UserRepository(new Container);
        $users = $users->all()->toArray();

        // For every user, add donations
        foreach ($users as $user) {
            // How many times we want to run it
            $run = rand(0, 10);

            // Fake it!
            for ($i = 0; $i < $run; $i++) {

                // Create columns
                $create_columns = [];

                for ($g = 0; $g < 6; $g++) {
                    // Get a random column
                    $random_column = array_rand($booklets->getColumns());

                    // Push it into the array
                    $create_columns[$random_column] = $random_column;
                }

                // Create a string
                $create_columns = implode(',', $create_columns);

                // Create instruments
                $create_instruments = [];

                for ($g = 0; $g < 6; $g++) {
                    // Get a random instrument
                    $random_instrument = array_rand($booklets->getInstruments());

                    // Push it into the array
                    $create_instruments[$random_instrument] = $random_instrument;
                }

                // Create a string
                $create_instruments = implode(',', $create_instruments);

                // Get the orders
                $orders = $booklets->getOrderby();

                // Get the types
                $types = $booklets->getTypes();

                $booklets->create([
                    'save' => rand(0, 1),
                    'group_by' => rand(0, 1),
                    'first_page' => rand(0, 1),
                    'newest_songs_count' => rand(0, 100),
                    'order' => $orders[array_rand($orders)],
                    'order2' => $orders[array_rand($orders)],
                    'order3' => $orders[array_rand($orders)],
                    'font_size' => rand(50, 100),
                    'columns' => $create_columns,
                    'instruments' => $create_instruments,
                    'types' => $types[array_rand($types)],
                    'booklet' => $faker->sentence($nbWords = 4)
                ]);
            }
        }
    }

}