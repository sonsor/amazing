<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Class OptionFacade
 * @package App\Facades
 */
class OptionFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'App\Repositories\OptionInterface';
    }

}