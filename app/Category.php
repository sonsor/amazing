<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

class Category extends Model
{
    public function children()
    {
        return $this->hasMany(Category::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function icons()
    {
        return $this->belongsToMany(Icon::class);
    }
}