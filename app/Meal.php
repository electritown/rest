<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $primaryKey = 'item_id';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient','ingredient_meal','item_id','ing_id')->withPivot('amount');                                      
    }

    public function categories(){
        $this->belongsTo('App\Category');
        return $this->belongsTo('App\Category','cat_id');
    }

}