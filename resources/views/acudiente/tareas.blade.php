@extends('acudiente.template.main')

@section('title','Lista de tareas')

@section('content')
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Tareas</h4> 
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Tareas</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      @include('flash::message')
      <!-- /row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h3 class="box-title">Lista de tareas registradas</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Asunto</th>
                    <th>Descripción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tareas as $i)
                    <tr>
                      <td>{{$i->fecha}}</td>
                      <td>{{$i->asunto}}</td>
                      <td>{{$i->descripcion}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </div>
  {!! $tareas->render() !!}
@endsection