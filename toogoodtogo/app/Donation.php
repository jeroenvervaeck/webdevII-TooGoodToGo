<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'discription',
        'amount',
        'isPublic',
    ];
}
