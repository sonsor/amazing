<?php

use Illuminate\Database\Seeder;

class IconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many genres you need, defaulting to 10
        $count = (int) $this->command->ask('How many icons do you need ?', 10);

        $this->command->info("Creating {$count} icons.");

        // Create the Genre
        $genres = factory(App\Icon::class, $count)->create()->each(function($icon) {
            $icon->children()->save(factory(App\Icon::class, 3)->make());
            $icon->categories()->save(factory(App\Category::class, 3)->make());
            $icon->tags()->save(factory(App\Tag::class, 3)->make());
            $icon->variation()->save(factory(App\VariationType::class, 1)->create());
        });

        $this->command->info('icons Created!');
    }
}
