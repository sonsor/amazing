<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VariationType;
use App\Category;
use App\Tag;
use App\Version;

/**
 * Class Icon
 * @package App
 */
class Icon extends Model
{
    /**
     * @var array
     */
    protected $fillable = array(
        'name',
        'slug',
        'classes',
        'version_id',
        'variation_id',
        'parent_id',
        'description_id',
        'price',
        'filename',
        'paid',
        'ios',
        'android'
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Icon::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Icon::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variation()
    {
        return $this->belongsTo(VariationType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function version()
    {
        return $this->belongsTo(Version::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function description()
    {
        return $this->belongsTo(Description::class);
    }
}
