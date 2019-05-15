<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Description
 * @package App
 */
class Description extends Model
{
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function icons()
    {
        return $this->hasMany(Icon::class, 'variation_id');
    }
}
