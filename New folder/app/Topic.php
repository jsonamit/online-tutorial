<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function sub_topic()
    {
        return $this->hasMany('App\Sub_topic','topics_id');
    }
    protected $fillable = [
        'lang_id', 'topic','updated_at','created_at',
    ];
}
