<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = array(
        'firstName',
        'surname',
        'email',
        'phoneNo',
        'message'
    );
}
