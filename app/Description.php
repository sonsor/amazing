<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Description
 * @package App
 */
class Description extends Model
{
    /**
     * @var array
     */
    protected $fillable = array(
        'slug',
        'shortDescription',
        'smallDescription1',
        'smallDescription2',
        'mediumDescription1',
        'mediumDescription2',
        'mediumDescription3',
        'mediumDescription4',
        'description1',
        'description2'
    );
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function icons()
    {
        return $this->hasMany(Icon::class, 'variation_id');
    }
}
