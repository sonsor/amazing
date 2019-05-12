<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

/**
 * Class Tag
 * @package App
 */
class Tag extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function icon()
    {
        return $this->belongsToMany(Icon::class);
    }
}
