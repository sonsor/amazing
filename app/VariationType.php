<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

/**
 * Class VariationType
 * @package App
 */
class VariationType extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'order'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function icons()
    {
        return $this->hasMany(Icon::class, 'variation_id');
    }
}

