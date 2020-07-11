<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    //
    protected $fillable = ['name','ic_number','image','status'];

    public function cases(){
        return $this->hasMany('App\Cases');
    }
}
