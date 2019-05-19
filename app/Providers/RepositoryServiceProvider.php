<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package App\Repositories
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        // binding icon repository
        $this->app->bind(
            'App\Repositories\IconInterface',
            'App\Repositories\Icon'
        );

        // binding tags repository
        $this->app->bind(
            'App\Repositories\TagInterface',
            'App\Repositories\Tag'
        );

        // binding categories repository
        $this->app->bind(
            'App\Repositories\CategoryInterface',
            'App\Repositories\Category'
        );

        // binding variation types repository
        $this->app->bind(
            'App\Repositories\VariationTypeInterface',
            'App\Repositories\VariationType'
        );

        // binding version repository
        $this->app->bind(
            'App\Repositories\VersionInterface',
            'App\Repositories\Version'
        );

        // for contact us form details
        $this->app->bind(
            'App\Repositories\ContactInterface',
            'App\Repositories\Contact'
        );

        // for options
        $this->app->bind(
            'App\Repositories\OptionInterface',
            'App\Repositories\Option'
        );

        // for options
        $this->app->bind(
            'App\Repositories\DownloadInterface',
            'App\Repositories\Download'
        );
    }

}