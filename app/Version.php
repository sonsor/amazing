<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

/**
 * Class Version
 * @package App
 */
class Version extends Model
{
    /**
     * @var array
     */
    protected $fillable = array(
        'version',
        'changeLog'
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function icons()
    {
        return $this->hasMany(Icon::class);
    }
}
