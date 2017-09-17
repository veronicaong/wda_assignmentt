<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    protected $fillable = ['first_name', 'last_name', 'email', 'password'];
    protected $table= 'user';
    public $timestamps= true;
    protected $primaryKey ='user_id';
    public $incrementing= true;

    public function tickets(){
        return $this->hasMany('App\Tickets', 'user_id', 'user_id');
    }

    public function comments(){
        return $this->hasMany('App\Comments', 'user_id', 'user_id');
    }
}


