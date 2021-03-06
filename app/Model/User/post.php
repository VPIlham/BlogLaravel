<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Model\User\tag','post_tags')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
