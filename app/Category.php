<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name']; // array para colocar los datos  de la tabla q se pueden mostrar

    //tambien se definen las relaciones
    //relacion 1 a muchos

    public function articles(){
        return $this->hasMany('App\Article')->withTimestamps();
    }
}
