<?php

namespace App\Http\Controllers;

use App\Repositories\VariationTypeInterface;
use Illuminate\Http\Request;

/**
 * Class VariationTypeController
 * @package App\Http\Controllers
 */
class VariationTypeController extends Controller
{
    /**
     * @var VariationTypeInterface
     */
    protected $varitionType;

    /**
     * VariationTypeController constructor.
     * @param VariationTypeInterface $variationType
     */
    public function __construct(VariationTypeInterface $variationType)
    {
        $this->varitionType = $variationType;
    }

    /**
     * @return array
     */
    public function list()
    {
        return $this->varitionType->getPublicVariationTypes();
    }
}
