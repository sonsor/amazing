<?php
use Illuminate\Database\Seeder;

/**
 * Class OptionTableSeeder
 */
class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Start Importing General Options');

        \Option::set('admin.email', config('mail.from.address'));

        $count = \Option::get('total.downloads');
        $count = empty($count) ? 0: $count;
        \Option::set('total.downloads', $count);

        $this->command->info('General Options Imported Successfully');
    }
}
