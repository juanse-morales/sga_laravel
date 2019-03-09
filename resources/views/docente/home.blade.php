@extends('docente.template.main')

@section('title','Home')

@section('content')

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Home</h4> 
      </div>
    </div>
    @include('flash::message')
    @include('docente.template.partials.errors')
    <div class="row">
      <div class="col-md-5 col-xs-6">
        <div class="white-box">
          <h4>Registrar Asistencia </h4><br>
          {!! Form::open(['class'=>'form-horizontal form-material', 'route'=>'asistencias.store', 'method'=>'POST']) !!}
            <div class="form-group">
              {!! Form::label('estudiante_id','Código del estudiante',['class'=>'col-md-12']) !!}
              <div class="col-md-12">
                {!! Form::text('estudiante_id',null,['class'=>'form-control form-control-line','required'] ) !!}
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