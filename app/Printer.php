<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    //
    protected $fillable = ['name','ip','location_id'];

    public function location(){
        return $this->belongsTo('App\Location');
    }

}
