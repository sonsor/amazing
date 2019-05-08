<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many genres you need, defaulting to 10
        $count = (int) $this->command->ask('How many Tags do you need ?', 10);

        $this->command->info("Creating {$count} Tags.");

        // Create the Genre
        $genres = factory(App\Tag::class, $count)->create();

        $this->command->info('Tags Created!');
    }
}
