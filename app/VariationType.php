<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

class VariationType extends Model
{
    public function icon()
    {
        return $this->belongsTo(Icon::class)
    }
}
