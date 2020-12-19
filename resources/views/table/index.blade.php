
@extends('adminlte::layouts.app')
@section('main-content')
<h2><b>Tablas Predefinidas</b></h1><hr>
<div class="table-responsive">
<table class="table table-striped">
  <tr>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Tipo</th>
    <th>Fuente</th>
    <th></th>
  </tr>
  @for ($i = 0; $i < count($variables); $i++)
    <tr>
      <td>{{ $variables[$i]->Nombre }}</td>
      <td style="width:600px;">
      <input type="text" placeholder="{{ $variables[$i]->Descripcion }}" value="{{ $variables[$i]->Descripcion }}" name="descripcion" id= "desc">
      <input type="hidden" value="{{$variables[$i]->idVariable}}" id ="idTabla">

      </td>
      <p>
      <button class="btn btn-primary" id="actualizar">Cambiar descripción</button>
      </p>
    
      <td>{{ $variables[$i]->Tipo }}</td>
      <td>{{ $fuentes[$i][0]->Name}}</td>
      <td style="width:305px;" class="col-xs-3"><a href="{{ url('form')}}/{{$variables[$i]->idVariable}}" class="btn btn-success" role="button">Ver tabla</a>  
                          <a href="{{ url('tables')}}/{{$variables[$i]->idVariable}}/{{'edit'}}" class="btn btn-warning" role="button">Modificar Valores</a>  
                          <a href="{{ url('tables')}}/{{$variables[$i]->idVariable}}/{{'exportar'}}" class="btn btn-success" role="button">Exportar a Excel</a>  
                          <a href="{{ url('tables')}}/{{$variables[$i]->idVariable}}/{{'delete'}}" onclick="return confirm('Al borrar la tabla, se perderan los datos de la Base de Datos, ¿Estás seguro de querer borrarla?')" class="btn btn-danger"> Borrar</a>
      </td>
    </tr>
  @endfor
</table>
</div>
 
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/functions.js"></script>