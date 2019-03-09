<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home',[
    'uses'    =>  'Acudiente@home',
    'as'      =>  'home'
]);

Route::group(['prefix'=>'docente'],function(){
  Route::resource('estudiantes','EstudiantesController');
  Route::resource('tareas','TareasController');
  Route::resource('asistencias','AsistenciaController');
});

Route::group(['prefix'=>'acudiente'],function(){
  Route::get('asistencia',[
    'uses'    =>  'Acudiente@asistencia',
    'as'      =>  'acudiente.asistencia'
  ]);
  Route::post('check',[
    'uses'    =>  'Acudiente@check',
    'as'      =>  'acudiente.check'
  ]);
  Route::get('tareas',[
    'uses'    =>  'TareasController@index2',
    'as'      =>  'tareas.index2'
  ]);
});