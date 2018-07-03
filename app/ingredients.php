<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    public function user(){

        return $this->belongsTo('App\user');
    }
}
