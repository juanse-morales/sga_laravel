<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";
    protected $fillable = ['nombres','apellidos'];
    public function asistencias(){
    	return $this->hasMany('App\Asistencia');
    }
    public function tareas(){
    	return $this->belongsToMany('App\Tarea')->withTimestamps();
    }
}
