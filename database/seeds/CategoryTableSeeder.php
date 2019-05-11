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
        App\Category::truncate();
        $categories = $this->get();

        $this->command->info("Getting json file.");

        // getting josn file data
        $data = File::get(database_path('data/categories.json'));

        $this->command->info("decoding json data.");
        // decoding the json

        $data = json_decode($data, false);

        $this->command->info("Create Records.");
        foreach ($data as $element) {
            $category = new App\Category();
            $category->name = $element->name;
            $category->slug = $element->slug;
            if (isset($element->parent)) {
                $category->parent = $categories[$element->parent] ?? null;
            }
            if (isset($categories[$element->slug])) {
                $category->id = $categories[$element->slug];
            }
            $category->save();
            $categories[$element->slug] = $category->id;
        }

        $this->command->info('Categories Created!');
    }


    private function get()
    {
        $categories = [];
        $results =  App\Category::select('id', 'slug')->get()->toArray();
        foreach ($results as $r) {
            $categories[$r->slug] = $r->id;
        }
        return $categories;
    }
}
