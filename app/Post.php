<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table =  array("posts","is_offer");


    //only thoses items can be filled.
    protected $fillable = array('content', 'title');
}
