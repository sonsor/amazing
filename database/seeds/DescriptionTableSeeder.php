<?php

use Illuminate\Database\Seeder;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descriptions = $this->getDescriptions();

        $this->command->info("Getting json file.");

        // getting josn file data
        $data = File::get(database_path('data/descriptions.json'));

        $this->command->info("decoding json data.");

        // decoding the json
        $data = json_decode($data, false);

        $this->command->info("Create Records.");
        
        foreach ($data as $element) {
            $description = $descriptions[$element->slug] ?? new App\Description();

            $description->slug = $element->slug;
            $description->shortDescription = $element->shortDescription ?? '';

            $description->mediumDescription1 = $element->mediumDescription1 ?? '';
            $description->mediumDescription2 = $element->mediumDescription2 ?? '';
            $description->mediumDescription3 = $element->mediumDescription3 ?? '';
            $description->mediumDescription4 = $element->mediumDescription4 ?? '';

            $description->smallDescription1 = $element->smallDescription1 ?? '';
            $description->smallDescription2 = $element->smallDescription2 ?? '';

            $description->description1 = $element->description1 ?? '';
            $description->description2 = $element->description2 ?? '';

            $description->save();
            $descriptions[$element->slug] = $description;
        }

        $this->command->info('Tags Created!');
    }

    private function getDescriptions()
    {
        $descriptions = [];
        $results = App\Description::all();
        foreach ($results as $r) {
            $descriptions[$r->slug] = $r;
        }
        return $descriptions;
    }
}
