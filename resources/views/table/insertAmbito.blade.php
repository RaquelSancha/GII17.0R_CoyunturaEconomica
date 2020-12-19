@extends('adminlte::layouts.app')


@section('main-content')

<h2><b>Tablas</b> Predefinidas:
@foreach($nombreVariable as $nom)
{{$nom->Nombre}}
@endforeach
</h1>
 <form class="form-horizontal" role="form" method="POST" action="{{ url('confirm/insertAmbito')}}/{{$id}}" >
    {{ csrf_field() }}
<div class="table-responsive">
<table  class="table table-striped"  align="center" border="5">
 <thead >
      <tr>
        <th rowspan="2"></th>
        @foreach($years as $year)
        <th colspan="12" align="center" bgcolor= "#60B664" style="color:White;">{{ $year->Year}}</th>
        @endforeach
      </tr>

      <tr  bgcolor= "#01A556" style="color:White;">
        @foreach($years as $year)
        <th scope="col">Ene</th>
        <th scope="col">Feb</th>
        <th scope="col">Mar</th>
        <th scope="col">Abr</th>
        <th scope="col">May</th>
        <th scope="col">Jun</th>
        <th scope="col">Jul</th>
        <th scope="col">Ago</th>
        <th scope="col">Sep</th>
        <th scope="col">Oct</th>
        <th scope="col">Nov</th>
        <th scope="col">Dic</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
  		<div class="form-group">
  		<label for="update"></label>
    	<tr>
      @for ($l = 0; $l < count($ambitos); $l++)
        <tr>
          <th scope="row" bgcolor="#000000" style="color:White;" >{{$ambitos[$l]->Nombre }}
              <td colspan="{{12*count($years)}}" bgcolor="#000000" style="color:White;" ></td>
          </th>
        </tr>
        <tr>
      	@for ($i = 0, $aux = 0; $i < count($categoria); $i++)
         @if(!(empty($supercategorias[$aux])))
            @if($idsCategoria[$i][0]->idSuperCategoria == $supercategorias[$aux]->idSuperCategoria)
              <tr>
                <th scope="row" bgcolor="#FFFFFF" style="color:Black;" >{{$supercategorias[$aux]->Name }}
                <?php  $aux++; ?>
                    <td colspan="{{12*count($years)}}" bgcolor="#FFFFFF" style="color:Black;" ></td>
                </th>
              </tr>
              
            @endif
          @endif
        <th scope="row">{{$categoria[$i]->Nombre}}</th> 
	        @for ($j = 0; $j < count($years); $j++)
	          @for ($k = 0; $k < 12; $k++)   
	            @if(empty($values[$l][($i * count($years))+$j][$k][0]->valor))
	            	<td>-</td>
	            @else
	            	<td>{{$values[$l][($i * count($years))+$j][$k][0]->valor}}</td>
	            @endif
	          @endfor
	        @endfor
      	</tr>  
      	@endfor
      @endfor
      <tr>
          <th scope="row" bgcolor="#000000" style="color:White;" ><input type="text" class="form-control input-sm"  name="new_Ambito" required>
              <td colspan="{{12*count($years)}}" bgcolor="#000000" style="color:White;" ></td>
          </th>
        </tr>
        <tr>
        @for ($i = 0, $aux = 0; $i < count($categoria); $i++)
         @if(!(empty($supercategorias[$aux])))
            @if($idsCategoria[$i][0]->idSuperCategoria == $supercategorias[$aux]->idSuperCategoria)
              <tr>
                <th scope="row" bgcolor="#FFFFFF" style="color:Black;" >{{$supercategorias[$aux]->Name }}
                <?php  $aux++; ?>
                    <td colspan="{{12*count($years)}}" bgcolor="#FFFFFF" style="color:Black;" ></td>
                </th>
              </tr>
              
            @endif
          @endif
        <th scope="row">{{$categoria[$i]->Nombre}}</th> 
          @for ($j = 0; $j < count($years); $j++)
            @for ($k = 0; $k < 12; $k++)   
              @if(empty($values[$l][($i * count($years))+$j][$k][0]->valor))
                <td><input style="width:80px;" type="number" step="0.01" class="form-control input-sm" placeholder="-" name="update[]"></td>
              @else
                <td><input style="width:80px;" type="number" step="0.01" class="form-control input-sm" placeholder="{{$values[$l][($i * count($years))+$j][$k][0]->valor}}" name="update[]"></td>
              @endif
            @endfor
          @endfor
        </tr>  
        @endfor
        </div>
    </tbody>
</table>
</div>
<br>
<div>
        <div align= "right"><a class= "btn btn-success" href="javascript:history.back(-1);" role="button">Volver</a>
        <input class="btn btn-success"  type="submit" value="Enviar" onclick="return confirm('Se modificarán los valores de la Base de datos,¿Estás seguro?')" />
</div>
</form>
		
@endsection
