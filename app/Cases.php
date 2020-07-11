<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    //
    protected $fillable = ['title','date','remark','status'];

    public function visitor(){
        return $this->belongsTo('App\Vistor');
    }
}
