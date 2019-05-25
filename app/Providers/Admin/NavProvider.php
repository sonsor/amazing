<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Contracts\Foundation\Application;
use Illuminate\View\View;

class NavProvider extends ServiceProvider
{
    protected $links;

    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->links = [
            [
                'name' => 'dashoard',
                'label' => 'Dashboard',
                'route' => 'admin.dashboard',
                'icon' => 'tachometer-alt',
                'children' => []
            ],
            [
                'name' => 'icon',
                'label' => 'Icons',
                'route' => 'admin.icons.list',
                'icon' => 'tachometer-alt',
                'children' => [
                    [
                        'label' => 'All Icons',
                        'route' => 'admin.icons.list',
                    ],
                    [
                        'label' => 'Add New Icon',
                        'route' => 'admin.icons.create',
                    ],
                ]
            ],
            [
                'name' => 'category',
                'label' => 'Categories',
                'route' => 'admin.category.list',
                'icon' => 'tachometer-alt',
                'children' => [
                    [
                        'label' => 'All Categories',
                        'route' => 'admin.category.list',
                    ],
                    [
                        'label' => 'Add New Category',
                        'route' => 'admin.category.create',
                    ],
                ]
            ],
            [
                'name' => 'tag',
                'label' => 'Tags',
                'route' => 'admin.tag.list',
                'icon' => 'tachometer-alt',
                'children' => [
                    [
                        'label' => 'All Tags',
                        'route' => 'admin.tag.list',
                    ],
                    [
                        'label' => 'Add New Tag',
                        'route' => 'admin.tag.create',
                    ],
                ]
            ],
            [
                'name' => 'variation-type',
                'label' => 'Variation Types',
                'route' => 'admin.variation.type.list',
                'icon' => 'tachometer-alt',
                'children' => [
                    [
                        'label' => 'All Variation Types',
                        'route' => 'admin.variation.type.list',
                    ],
                    [
                        'label' => 'Add New Variation Type',
                        'route' => 'admin.variation.type.create',
                    ],
                ]
            ],
            [
                'name' => 'version',
                'label' => 'Versions',
                'route' => 'admin.version.list',
                'icon' => 'tachometer-alt',
                'children' => [
                    [
                        'label' => 'All Versions',
                        'route' => 'admin.version.list',
                    ],
                    [
                        'label' => 'Add New Version',
                        'route' => 'admin.version.create',
                    ],
                ]
            ]
        ];
    }

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
        view()->composer('admin.*', function ($view) {
            view()->share('nav', $this->links);
        });
    }
}
