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
     * @var array
     */
    protected $fillable = array(
        'name',
        'slug'
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function icon()
    {
        return $this->belongsToMany(Icon::class);
    }
}
