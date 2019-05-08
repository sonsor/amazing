<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VariationType;
use App\Category;
use App\Tag;
class Icon extends Model
{
    public function children()
    {
        return $this->hasMany(Icon::class, 'parent');
    }

    public function parent()
    {
        return $this->belongsTo(Icon::class, 'parent');
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::calss);
    }

    public function variation()
    {
        return $this->hasOne(VariationType::class);
    }
}
