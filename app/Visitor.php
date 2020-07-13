<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
    protected $fillable = ['name','ic_number','image','status'];

    public function cases(){
        return $this->hasMany('App\Cases');
    }

    public function check(){
        return $this->hasMany('App\Checkin');
    }
}
