<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $fillable = ['sender_id', 'receiver_id'
    ];

//    public function receiver()
//    {
//        return $this->hasMany('App\User', 'receiver_id');
//    }
//
//    public function sender()
//    {
//        return $this->belongsTo('App\User', 'sender_id');
//    }

}
