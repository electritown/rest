<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingcategory extends Model
{
    
    public function ingredients(){
    return $this->hasMany('App\Ingredient', 'ingcat_id', 'id');
    }

}
