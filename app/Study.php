<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

        public function getTagListAttribute(){
        return $this->tags->lists('id')->all();
    }
}
