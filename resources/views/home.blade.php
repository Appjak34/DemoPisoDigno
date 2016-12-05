@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css" />
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Evidencias</div>
                <div class="panel-body">
                  {!! Form::open(['route' => 'Municipios.store', 'method' => 'POST','files' => true]) !!}
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      {!! Form::label('Municipio','Municipio')!!}<br>
                      {!! Form::text('municipio', null, ['class'=>'form-control','placeholder'=>'Municipio', 'id' => 'municipio'])!!}
                      {!! Form::hidden('id_municipios', null, ['id' => 'id_municipio'])!!}
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      {!! Form::label('Familia','Familia Beneficiada')!!}
                      {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre de la familia'])!!}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <center>
                        <img src="{{asset('elementDropInterface.jpg')}}" class="img-thumbnail" style="height: 100px; width: 100px;"></img>
                      </center>
                      {!! Form::label('Imagen','Imagen 1')!!}
                      {!! Form::file('Imagen1',['class'=> 'form-control'])!!}
                    </div>
                    <div class="col-md-4">
                      <center>
                        <img src="{{asset('elementDropInterface.jpg')}}" class="img-thumbnail" style="height: 100px; width: 100px;"></img>
                      </center>
                      {!! Form::label('Imagen','Imagen 2')!!}
                      {!! Form::file('Imagen2',['class'=> 'form-control'])!!}
                    </div>
                    <div class="col-md-4">
                      <center>
                        <img src="{{asset('elementDropInterface.jpg')}}" class="img-thumbnail" style="height: 100px; width: 100px;"></img>
                      </center>
                      {!! Form::label('Imagen','Imagen 3')!!}
                      {!! Form::file('Imagen3',['class'=> 'form-control'])!!}
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      {!! Form::submit('Guardar', ['class' => 'btn btn-lg btn-success', 'style' => 'width: 100%;']) !!}
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascripts')
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/autocomplete-municipio.js')}}"></script>
<script type="text/javascript">
  var token = '{{ Session::token() }}';
</script>
@endsection