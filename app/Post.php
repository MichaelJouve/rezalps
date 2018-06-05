<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Askedio\SoftCascade\Traits\SoftCascadeTrait;

class Post extends Model
{
    use SoftDeletes;
    use SoftCascadeTrait;

    //only thoses items can be filled.
    protected $fillable = ['publication', 'user_id'];
    protected $dates = ['deleted_at'];
    protected $softCascade = ['comments'];

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
        return $this->hasMany('App\Comment')->orderBy('created_at', 'desc');
    }

    /*public function scopeRecup_posts()
    {
        return Post::orderBy('created_at', 'desc')->get();
    }*/


}
