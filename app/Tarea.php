<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = "tareas";
    protected $fillable = ['fecha','asunto','descripcion'];
    public function estudiantes(){
    	return $this->belongsToMany('App\Estudiante')->withTimestamps();
    }
}
