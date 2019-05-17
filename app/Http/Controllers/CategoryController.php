<?php
namespace App\Http\Controllers;

use App\Repositories\CategoryInterface;

/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * @var CategoryInterface
     */
    protected $category;

    /**
     * CategoryController constructor.
     * @param CategoryInterface $category
     */
    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    /**
     * @return array
     */
    public function list()
    {
        return $this->category->all();
    }
}
