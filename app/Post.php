<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //only thoses items can be filled.
    protected $fillable = array('publication', 'title');
}
