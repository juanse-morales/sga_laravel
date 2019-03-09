<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_tarea', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('estudiante_id');
            $table->unsignedInteger('tarea_id');
            $table->timestamps();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('tarea_id')->references('id')->on('tareas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante_tarea');
    }
}
