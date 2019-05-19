<?php

use Illuminate\Database\Seeder;

/**
 * Class VersionTableSeeder
 */
class VersionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // getting already saved tags slugs
        $versions = $this->get();

        $this->command->info("Getting json file.");

        // getting josn file data
        $data = File::get(database_path('data/versions.json'));

        $this->command->info("decoding json data.");
        // decoding the json
        $data = json_decode($data, false);

        if ($data === null) {
            $this->command->error("File is empty or invalid data.");
            return;
        }

        $this->command->info("Create Records.");
        foreach ($data as $element) {
            $version = $versions[$element->version] ?? new App\Version();
            $version->version = $element->version;
            $version->changeLog = $element->changeLog;
            $version->save();
            $versions[$element->version] = $element;
        }

        $this->command->info('Tags Created!');
    }

    /**
     * @return array
     */
    private function get(): array
    {
        $versions = [];
        $results =  App\Version::all();
        foreach ($results as $r) {
            $versions[$r->version] = $r;
        }
        return $versions;
    }
}
