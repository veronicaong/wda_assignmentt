<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table= 'comment';
    public $timestamps= true;
    protected $primaryKey ='comments_id';
    public $incrementing= true;

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
    public function ticket(){
        return $this->belongsTo('App\Tickets', 'ticket_id', 'ticket_id');
    }

}
