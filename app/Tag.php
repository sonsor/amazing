<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Tag extends Model
{
    public function icon()
    {
        return $this->belongsToMany(Icon::class);
    }
}
