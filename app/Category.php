<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

class Category extends Model
{
    public function children()
    {
        return $this->hasMany(Category::class, 'parent');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent');
    }

    public function icon()
    {
        return $this->belongsToMany(Icon::class)
    }
}
