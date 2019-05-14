<?php

use Illuminate\Database\Seeder;

/**
 * Class TagTableSeeder
 */
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // getting already saved tags slugs
        $tags = $this->get();

        $this->command->info("Getting json file.");

        // getting josn file data
        $data = File::get(database_path('data/tags.json'));

        $this->command->info("decoding json data.");
        // decoding the json
        $data = json_decode($data, false);

        if ($data === null) {
            $this->command->warn("File is empty or invalid data.");
            return;
        }

        $this->command->info("Create Records.");
        foreach ($data as $element) {
            $tag = $tags[$element->slug] ?? new App\Tag();
            $tag->name = $element->name;
            $tag->slug = $element->slug;
            $tag->save();
            $tags[$element->slug] = $element;
        }

        $this->command->info('Tags Created!');
    }


    /**
     * @return array
     */
    private function get(): array
    {
        $tags = [];
        $results =  App\Tag::select('id', 'slug')->get();
        foreach ($results as $r) {
            $tags[$r->slug] = $r;
        }
        return $tags;
    }
}
