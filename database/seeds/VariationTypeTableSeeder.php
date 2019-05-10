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
        App\VariationType::truncate();
        $variationTypes = $this->get();

        $this->command->info("Getting json file.");

        // getting josn file data
        $data = File::get(database_path('data/variation-types.json'));

        $this->command->info("decoding json data.");
        // decoding the json
        $data = json_decode($data, false);

        $this->command->info("Create Records.");
        foreach ($data as $element) {
            if (!in_array($element->slug, $variationTypes)) {
                $variationType = new App\VariationType();
                $variationType->name = $element->name;
                $variationType->slug = $element->slug;
                $variationType->save();
            }
        }

        $this->command->info('Variation Types Created!');
    }

    private function get()
    {
        return App\VariationType::pluck('slug')->get()->toArray()

    }
}
