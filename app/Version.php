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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function icons()
    {
        return $this->hasMany(Icon::class, 'variation_id');
    }

    public static function getLatestVersion()
    {
        return Version::orderBy('created_at', 'desc')->pluck('id')->first();
    }
}
