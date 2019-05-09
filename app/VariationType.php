<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

class VariationType extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'order'
    ];

    public function icons()
    {
        return $this->belongsToMany(Icon::class);
    }
}
