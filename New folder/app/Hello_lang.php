<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hello_lang extends Model
{
    protected $fillable = [
        'lang_id', 'title','description','quest_headone','quest_headtwo','quest_headthree','quest_headfour','quest_headfive',
        'example_quest','example','output','features_headone','features_headtwo','features_headthree',
        'features_headfour'
    ];
}
