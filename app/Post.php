<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //only thoses items can be filled.
    protected $fillable = ['publication'];

    /**
     * Link with model user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\comments');
    }


}
