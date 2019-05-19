<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OptionTableSeeder::class);
        $this->call(VersionTableSeeder::class);
        $this->call(VariationTypeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(DescriptionTableSeeder::class);
        $this->call(IconTableSeeder::class);
    }
}
