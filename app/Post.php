<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //only thoses items can be filled.
    protected $fillable = ['publication', 'user_id'];

    /**
     * Link with model user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Link with model comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /*public function scopeRecup_posts()
    {
        return Post::orderBy('created_at', 'desc')->get();
    }*/


}
