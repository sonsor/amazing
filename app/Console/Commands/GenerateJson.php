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

        $json = '[';
        foreach ($files as $file) {
            $slug = $this->getFileName($file);
            $json .= $this->getIcon($slug) . ',';
        }

        $files = array_filter(
            Storage::disk('svg')->files('brand'),
            function ($item) {
                return strpos($item, 'svg');
            }
        );

        foreach ($files as $file) {
            $slug = $this->getFileName($file);
            $json .= $this->getBrandIcon($slug) . ',';
        }

        $json = rtrim($json, ",");
        $json .= ']';
        file_put_contents('amazing-neo.json', $json);
    }

    private function getFileName($fileName)
    {
        return basename($fileName, '.svg');
    }

    private function getIcon($fileName)
    {
        $obj = '{
            "name": "{{name}}",
            "slug": "{{slug}}",
            "classes": "{{slug}}",
            "version": "1.0.0",
            "ios": "{{slug}}",
            "android": "{{slug}}",
            "variations": [
              {
                "paid": false,
                "type": "solid",
                "price": "0.00",
                "version": "1.0.0",
                "ios": "{{slug}}",
                "android": "{{slug}}"
              },
              {
                "paid": true,
                "type": "light",
                "price": "0.00",
                "version": "1.0.0",
                "ios": "{{slug}}",
                "android": "{{slug}}"
              },
              {
                "paid": true,
                "type": "regular",
                "price": "0.00",
                "version": "1.0.0",
                "ios": "{{slug}}",
                "android": "{{slug}}"
              }
            ]
          }';

        $obj = str_replace('{{name}}', ucfirst($fileName), $obj);
        $obj = str_replace('{{slug}}', $fileName, $obj);
        return $obj;
    }

    private function getBrandIcon($fileName)
    {
        $obj = '{
            "name": "{{name}}",
            "slug": "{{slug}}",
            "classes": "{{slug}}",
            "version": "1.0.0",
            "ios": "{{slug}}",
            "android": "{{slug}}",
            "variations": [
              {
                "paid": false,
                "type": "brand",
                "price": "0.00",
                "version": "1.0.0",
                "ios": "{{slug}}",
                "android": "{{slug}}"
              }
            ]
          }';

        $obj = str_replace('{{name}}', ucfirst($fileName), $obj);
        $obj = str_replace('{{slug}}', $fileName, $obj);
        return $obj;
    }
}
