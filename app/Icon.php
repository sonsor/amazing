<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VariationType;
use App\Category;
use App\Tag;
use App\Version;

class Icon extends Model
{
    public function children()
    {
        return $this->hasMany(Icon::class);
    }

    public function parent()
    {
        return $this->belongsTo(Icon::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::calss);
    }

    public function variation()
    {
        return $this->belongsTo(VariationType::class);
    }

    public function version()
    {
        return $this->belongsTo(Version::class);
    }
}
