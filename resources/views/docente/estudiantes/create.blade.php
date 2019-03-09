@extends('docente.template.main')

@section('title','Registrar')

@section('content')
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Registrar</h4> 
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Registrar</li>
        </ol>
      </div>
    </div>
    @include('docente.template.partials.errors')
    <div class="row">
      <div class="col-md-5 col-xs-6">
        <div class="white-box">
          <h4>Registrar Tarea </h4><br>
          {!! Form::open(['class'=>'form-horizontal form-material', 'route'=>'tareas.store', 'method'=>'POST']) !!}
            <div class="form-group">
              {!! Form::label('asunto','Asunto',['class'=>'col-md-12']) !!}
              <div class="col-md-12">
                {!! Form::text('asunto',null,['class'=>'form-control form-control-line','placeholder'=>'Realizar ejercicios','required'] ) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('fecha','Fecha',['class'=>'col-md-12']) !!}
              <div class="col-md-12">
                {!! Form::text('fecha',null,['class'=>'form-control form-control-line','placeholder'=>'2019-11-24','required'] ) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('descripcion','Descripción',['class'=>'col-md-12']) !!}
              <div class="col-md-12">
                {!! Form::textarea('descripcion',null,['class'=>'form-control form-control-line', 'rows'=>'3'] ) !!}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    
      <div class="col-md-5 col-xs-6">
        <div class="white-box">
          <h4>Registrar Estudiante </h4><br>
          {!! Form::open(['class'=>'form-horizontal form-material', 'route'=>'estudiantes.store', 'method'=>'POST']) !!}
            <div class="form-group">
              {!! Form::label('nombres','Nombres completos',['class'=>'col-md-12']) !!}
              <div class="col-md-12">
                {!! Form::text('nombres',null,['class'=>'form-control form-control-line','placeholder'=>'Johnathan Doe','required'] ) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('apellidos','Apellidos completos',['class'=>'col-md-12']) !!}
              <div class="col-md-12">
                {!! Form::text('apellidos',null,['class'=>'form-control form-control-line','placeholder'=>'Rodriguez Sarate','required'] ) !!}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection