<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loginuser extends Model
{
    protected $fillable = [
        'username','password','updated_at','created_at',
    ];
}
