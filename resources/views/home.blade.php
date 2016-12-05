@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  {!! Form::open(['route' => 'Municipios.store', 'method' => 'POST','files' => true]) !!}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('Municipio','Municipio')!!}<br>
                    {!! Form::select('id_municipios',$municipios)!!}
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
                  <div class="col-md-12">
                    {!! Form::label('Imagen','Imagen')!!}
                    {!! Form::file('Imagen',['class'=> 'form-control'])!!}
                  </div>
                </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
