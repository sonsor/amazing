<?php

use Illuminate\Database\Seeder;

class VersionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many genres you need, defaulting to 10
        $continue = (int) $this->command->ask('Would you like to create new version', 'no');

        if ($continue === 'no') {
            return;
        }

        do {
            $versionNo = (string) $this->command->ask('Please enter the version number', '');
        } while ($versionNo === '');

        $changeLog = (string) $this->command->ask('Please enter change log', '');


        $this->command->info("Creating version " . $versionNo);


        $version = new App\Version();
        $version->version = $versionNo;
        $version->changeLog = $changeLog;
        $version->save();

        $this->command->info('Version Created!');
    }
}
