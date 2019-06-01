<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MultiSelect extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::macro('multiselect', function (
            string $name,
            array $options,
            $value,
            array $attributes = array()
        ) {
            $value = !is_array($value) ? (array) $value: $value;
            $attributes = implode(
                ' ',
                array_map(
                    function ($v, $k) {
                        return $k . '="' . $v . '"';
                    },
                    $attributes,
                    array_keys($attributes)
                )
            );

            return view('shared.multiselect', compact(
                'name',
                'value',
                'options',
                'attributes'
            ));

        });
    }
}
