@extends('acudiente.template.main')

@section('title','Comprobar asistencia')

@section('content')

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Comprobar asistencia</h4> 
      </div>
    </div>
    @include('flash::message')
    @include('docente.template.partials.errors')
    <div class="row">
      <div class="col-md-5 col-xs-6">
        <div class="white-box">
          <h4>Comprobar Asistencia </h4><br>
          {!! Form::open(['class'=>'form-horizontal form-material', 'route'=>'acudiente.check', 'method'=>'POST']) !!}
            <div class="form-group">
              {!! Form::label('estudiante_id','Código del Estudiante',['class'=>'col-md-12']) !!}
              <div class="col-md-12">
                {!! Form::text('estudiante_id',null,['class'=>'form-control form-control-line','required'] ) !!}
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                {!! Form::submit('Chequear',['class'=>'btn btn-primary']) !!}
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection