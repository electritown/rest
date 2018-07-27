<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'cat_id';

    public function meals(){
        $this->belongsTo('App\Meal');
        return $this->belongsToMany('App\Meal','cat_id','cat_id');
    }
}