<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table= 'ticket';
    public $timestamps= true;
    protected $primaryKey ='ticket_id';
    public $incrementing= true;

    public function comments(){
        return $this->hasMany('App\Comments', 'ticket_id', 'ticket_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }


}
