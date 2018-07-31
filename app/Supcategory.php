<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supcategory extends Model
{
    //
    protected $primaryKey = 'id';

    public function categories(){
        return $this->hasMany('App\Category','supcat_id','id');
    }
}
