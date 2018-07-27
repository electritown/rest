<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'item_id';

    public function user(){
        return $this->belongsTo('App\user');
    }

    public function ingredients()
    {
        $this->belongsTo('App\Ingredient');
        return $this->belongsToMany('App\Ingredient','ingredient_menu','item_id','ing_id');                                      
    }
    
    public function categories(){
        $this->belongsTo('App\Category');
        return $this->belongsToMany('App\Category','category_menu','item_id','cat_id');
    }

}
