<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //only thoses items can be filled.
    protected $fillable = ['publication'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
