<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['title',
                           'authors',
                           'publication_date',
                            'link_to_article'];
    
//    protected $dates = ['published_at'];
//
//    public function scopePublished($query){
//        $query->where('published_at','<=', Carbon::now());
//    }
    
    public function setPublishedAtAttribute($date){
        $this->attributes['publication_date'] =         Carbon::parse($date);
    }
    
    public function user(){
        return $this->belongsTo('App\User');  
    }

    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }


}