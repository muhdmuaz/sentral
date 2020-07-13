<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable = ['visitor_id','purpose','location','person_incharge','item_declare'];

    public function visitor()
    {
        return $this->belongsTo('App\Visitor');
    }
}
