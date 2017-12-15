<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title','content','category_id','user_id'];

    public function categories(){
        return $this->belonsTo('App\Category');
    }

    public function users(){
        return $this->belonsTo('App\User');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function tags(){
        return $this->belongsToMany('App\Taggi');
    }
}
