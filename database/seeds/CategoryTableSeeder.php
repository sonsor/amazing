<?php

use Illuminate\Database\Seeder;

/**
 * Class CategoryTableSeeder
 */
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = $this->getCategories();

        $this->command->info("Getting json file.");

        // getting josn file data
        $data = File::get(database_path('data/categories.json'));

        $this->command->info("decoding json data.");
        // decoding the json

        $data = json_decode($data, false);

        $this->command->info("Create Records.");
        foreach ($data as $element) {
            $category = $categories[$element->slug] ?? new App\Category();
            $category->name = $element->name;
            $category->slug = $element->slug;
            if (isset($element->parent) && isset($categories[$element->parent])) {
                $category->parent()->associate($categories[$element->parent])->save();
            }
            
            $category->save();

            $categories[$element->slug] = $category;
        }

        $this->command->info('Categories Created!');
    }


    /**
     * @return array
     */
    private function getCategories(): array
    {
        $categories = [];
        $results =  App\Category::select('id', 'slug')->get();
        foreach ($results as $r) {
            $categories[$r->slug] = $r;
        }
        return $categories;
    }
}
