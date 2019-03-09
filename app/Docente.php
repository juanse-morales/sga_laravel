<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = "docentes";
    protected $fillable = ['nombres','apellidos','telefono','email'];
    protected $hidden = ['password'];
    public function estudiantes(){
    	return $this->hasMany('App\Estudiante');
    }
}
