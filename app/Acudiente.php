<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
    protected $table = "acudientes";
    protected $fillable = ['nombres','apellidos','telefono','email'];
    protected $hidden = ['password','remember_token'];
    public function estudiantes(){
    	return $this->hasMany('App\Estudiante');
    }
}
