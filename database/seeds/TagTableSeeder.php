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
        App\VariationType::truncate();

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
            if (!in_array($element->slug, $tags)) {
                $tag = new App\Tag();
                $tag->name = $element->name;
                $tag->slug = $element->slug;
                $tag->save();
                $tags[] = $element->slug;
            }
        }

        $this->command->info('Tags Created!');
    }


    private function get()
    {
        return App\Tag::pluck('slug')->all();
    }
}
