<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = ['name','company_id',];

    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function users(){
        return $this->hasMany('App\User');
    }

}
