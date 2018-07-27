<?php

namespace App;
    
use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
         protected $primaryKey = 'ing_id';

         public function meals(){
             return $this->belongsToMany('App\Meal','ingredient_meal','ing_id','item_id');
         }

}

