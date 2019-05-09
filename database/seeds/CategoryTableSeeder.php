<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many genres you need, defaulting to 10
        $count = (int) $this->command->ask('How many Categories do you need ?', 10);

        $this->command->info("Creating {$count} Categories.");

        // Create the Genre
        $genres = factory(App\Category::class, $count)->create()->each(function($category) {
            $category->children()->save(factory(App\Category::class)->make());
        });

        $this->command->info('Categories Created!');
    }
}
