<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
//    public function language()
//    {
//        return $this->hasOne('App\Lang');
//    }
    public function topic()
    {
        return $this->hasMany('App\Topic','lang_id');
    }
    protected $fillable = [
       'lang_id','langname','updated_at','created_at',
    ];
}
