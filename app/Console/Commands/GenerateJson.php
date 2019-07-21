<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GenerateJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will read .svg files from storage and make a json file from it';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $files = array_filter(
            Storage::disk('svg')->files('solid'),
            function ($item) {
                return strpos($item, 'svg');
            }
        );
        var_dump($files);
    }
}
