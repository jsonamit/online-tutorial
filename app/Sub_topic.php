<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_topic extends Model
{
    //
//    protected $fillable = [
//        'topics_id', 'title','description','quest_headone','quest_headtwo','quest_headthree','quest_headfour','quest_headfive',
//        'example_quest','example','output','features_headone','features_headtwo','features_headthree',
//        'features_headfour'
//    ];
    protected $fillable = [
        'topics_id', 'title','description','quest_headone','quest_headtwo','quest_headthree','quest_headfour','quest_headfive',
        'example_quest','example','output','features_one_question','features_one_ans','features_two_question','features_two_ans','features_three_question','features_three_ans',
        'features_headfour'
    ];
}
