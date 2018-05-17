<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'city', 'birthdate', 'phone_number', 'siret', 'entreprise', 'description', 'pitch_video', 'cv', 'avatar', 'website', 'job'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }

    /**
     * Get post from user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post')->latest();
    }

    /**
     * Get comment from user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment')->latest();
    }

    /**
     * Get media from user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medias()
    {
        return $this->hasMany('App\Media');
    }

    /**
     * All that is because we have a pivot table "relationship" therefore we need to say: this is related to Model user with relation in table relationships
     * and add the foreignPivot key and relatedPivotkey...
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sender()
    {
        return $this->belongsToMany('App\User', 'relationships', 'sender_id', 'receiver_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function receiver()
    {
        return $this->belongsToMany('App\User', 'relationships', 'receiver_id', 'sender_id');
    }

    /**
     * @param $limit of users who will be return.
     * @param array $sort
     * @param array $queries
     * @return mixed
     */
    public function findFollowed($limit, $sort = array(), $queries = array())
    {
        $user = User::load('sender')->take($limit)->orderBy($sort)->;

        return $user;
    }
}
