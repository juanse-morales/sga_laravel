@extends('docente.template.main')

@section('title','Lista de estudiantes')

@section('content')
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Estudiantes</h4> 
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Estudiantes</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /row -->
      @include('flash::message')
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h3 class="box-title">Lista de estudiantes registrados</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($estudiantes as $i)
                    <tr>
                      <td>{{$i->id}}</td>
                      <td>{{$i->nombres}}</td>
                      <td>{{$i->apellidos}}</td>
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
  {!! $estudiantes->render() !!}
@endsection