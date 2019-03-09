<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;

class Acudiente extends Controller
{

  // Show the form for check Asistencia.
  public function asistencia(){ return view('acudiente.asistencia'); }

  // Display the specified resource.
  public function check(Request $request){
    $array = $request->all();
    $id = $array['estudiante_id'];
    $asistencia = Asistencia::where('estudiante_id',$id)->first();
    if($asistencia){
    	flash('Estudiante asistió')->success()->important();
    	return redirect()->route('acudiente.asistencia');
    }else{
    	flash('Estudiante no asistió')->error()->important();
    	return redirect()->route('acudiente.asistencia');
    }
  }

  public function home(){
    return view('welcome');
  }
}
