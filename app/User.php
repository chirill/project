<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','location_id','company_id','role_id','is_active',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function location(){
        return $this->belongsTo('App\Location');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function isAdmin(){
        if ($this->role->name == 'administrator'){
            return true;
        }
        return false;
    }

    public function setPasswordAttribute($password){
        if(!empty($password)){
            $this->attributes['password'] = bcrypt($password);
        }
        $this->attributes['password'] = $password;
    }
}
