<?php

use Illuminate\Database\Seeder;

/**
 * Class VariationTypeTableSeeder
 */
class VariationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variationTypes = $this->get();

        $this->command->info("Getting json file.");

        // getting josn file data
        $data = File::get(database_path('data/variation-types.json'));

        $this->command->info("decoding json data.");
        // decoding the json
        $data = json_decode($data, false);

        $this->command->info("Create Records.");
        foreach ($data as $element) {
            $variationType = $variationTypes[$element->slug] ?? new App\VariationType();
            $variationType->name = $element->name;
            $variationType->slug = $element->slug;
            $variationType->classes = $element->classes;
            
            $variationType->save();
            $variationTypes[$element->slug] = $variationType;

        }

        $this->command->info('Variation Types Created!');
    }

    /**
     * @return array
     */
    private function get(): array
    {
        $variationTypes = [];
        $results =  App\VariationType::all();
        foreach ($results as $r) {
            $variationTypes[$r->slug] = $r;
        }
        return $variationTypes;
    }
}
