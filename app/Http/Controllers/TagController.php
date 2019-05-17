<?php
namespace App\Http\Controllers;

use App\Repositories\TagInterface;

/**
 * Class TagController
 * @package App\Http\Controllers
 */
class TagController extends Controller
{
    /**
     * @var TagInterface
     */
    protected $tag;

    /**
     * TagController constructor.
     * @param TagInterface $tag
     */
    public function __construct(TagInterface $tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return array
     */
    public function list()
    {
        return $this->tag->all();
    }
    //
}
