<?php

use Illuminate\Database\Seeder;

class VariationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many genres you need, defaulting to 10
        $count = (int) $this->command->ask('How many Variation Type do you need ?', 10);

        $this->command->info("Creating {$count} Variation Type.");

        // Create the Genre
        $genres = factory(App\VariationType::class, $count)->create();

        $this->command->info('Variation Types Created!');
    }
}
