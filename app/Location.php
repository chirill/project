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

}
