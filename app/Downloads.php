<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    protected $fillable = array(
        'name',
        'email',
        'token',
        'expire'
    );
}
