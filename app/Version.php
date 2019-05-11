<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

class Version extends Model
{
    public function icons()
    {
        return $this->belongsToMany(Icon::class);
    }
}
