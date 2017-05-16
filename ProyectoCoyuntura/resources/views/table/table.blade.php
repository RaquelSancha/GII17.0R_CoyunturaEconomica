<?php $asterisco=0;?>

<table  class="table table-striped"  align="center" border="5">
  @if($filtrado == "Meses")
    <thead >
      <tr>
        <th rowspan="2"></th>
        @foreach($years as $year)
        <th colspan="12" align="center" bgcolor= "#60B664" style="color:White;">{{ $year}}</th>
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
      <tr>
      @for ($i = 0; $i < count($categoria); $i++)
        <th scope="row">{{$categoria[$i]}}</th> 
        @for ($j = 0; $j < count($years); $j++)
          @for ($k = 0; $k < 12; $k++)   
            @if(empty($values[($i * count($years))+$j][$k][0]->Valor))
            <td>-</td>
            @else
            <td>{{$values[($i * count($years))+$j][$k][0]->Valor}}</td>
            @endif
          @endfor
        @endfor
      </tr>  
      @endfor
    </tbody>
  @elseif($filtrado == "Trimestres")
   <thead >
      <tr>
        <th rowspan="2"></th>
        @foreach($years as $year)
        <th colspan="4" align="center" bgcolor= "#60B664" style="color:White;">{{ $year}}</th>
        @endforeach
      </tr>

      <tr  bgcolor= "#01A556" style="color:White;">
        @foreach($years as $year)
        <th scope="col">I TRI</th>
        <th scope="col">II TRI</th>
        <th scope="col">III TRI</th>
        <th scope="col">IV TRI</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      <tr>
      @for ($i = 0; $i < count($categoria); $i++)
        <th scope="row">{{$categoria[$i]}}</th> 
        @for ($j = 0; $j < count($years); $j++)
          @for ($k = 0; $k < 12; $k=$k+3) 

            @if(empty($values[($i * count($years))+$j][$k][0]->Valor))
              @if(empty($values[($i * count($years))+$j][$k+1][0]->Valor))
                @if(empty($values[($i * count($years))+$j][$k+2][0]->Valor))
                  <td>-</td><?php $asterisco=1?>
                @else
                  <td>{{$values[($i * count($years))+$j][$k+2][0]->Valor}}*</td><?php $asterisco=1?>
                @endif
              @else
                @if(empty($values[($i * count($years))+$j][$k+2][0]->Valor))
                  <td>{{$values[($i * count($years))+$j][$k+1][0]->Valor}}*</td><?php $asterisco=1?>
                @else
                  <td>{{(($values[($i * count($years))+$j][$k+2][0]->Valor)+
                  ($values[($i * count($years))+$j][$k+1][0]->Valor))/2}}*</td><?php $asterisco=1?>
                @endif
              @endif
            @else  
              @if(empty($values[($i * count($years))+$j][$k+1][0]->Valor))
                @if(empty($values[($i * count($years))+$j][$k+2][0]->Valor))
                  <td>{{$values[($i * count($years))+$j][$k][0]->Valor}}*</td><?php $asterisco=1?>
                @else
                   <td>{{(($values[($i * count($years))+$j][$k+2][0]->Valor)+
                  ($values[($i * count($years))+$j][$k][0]->Valor))/2}}*</td><?php $asterisco=1?>
                @endif
              @else
                @if(empty($values[($i * count($years))+$j][$k+2][0]->Valor))
                  <td>{{(($values[($i * count($years))+$j][$k+1][0]->Valor)+
                  ($values[($i * count($years))+$j][$k][0]->Valor))/2}}*</td><?php $asterisco=1?> 
                @else 
                  <td>{{ (($values[($i * count($years))+$j][$k][0]->Valor)+
                  ($values[($i * count($years))+$j][$k+1][0]->Valor)+
                  ($values[($i * count($years))+$j][$k+2][0]->Valor))/3 }}</td>
                @endif
              @endif
            @endif
          @endfor
        @endfor
      </tr>  
      @endfor
    </tbody>

  @else
     <thead >
      <tr>
        <th rowspan="2"></th>
        @foreach($years as $year)
        <th colspan="1" align="center" bgcolor= "#60B664" style="color:White;">{{ $year}}</th>
        @endforeach
      </tr>
    </thead>
     <tbody>
      <tr>
      @for ($i = 0; $i < count($categoria); $i++)
        <th scope="row">{{$categoria[$i]}}</th> 
        @for ($j = 0; $j < count($years); $j++)

            <td>{{ 
              ((($values[($i * count($years))+$j][0][0]->Valor)+
              ($values[($i * count($years))+$j][1][0]->Valor)+
              ($values[($i * count($years))+$j][2][0]->Valor)+
              ($values[($i * count($years))+$j][3][0]->Valor)+
              ($values[($i * count($years))+$j][4][0]->Valor)+
              ($values[($i * count($years))+$j][5][0]->Valor)+
              ($values[($i * count($years))+$j][6][0]->Valor)+
              ($values[($i * count($years))+$j][7][0]->Valor)+
              ($values[($i * count($years))+$j][8][0]->Valor)+
              ($values[($i * count($years))+$j][9][0]->Valor)+
              ($values[($i * count($years))+$j][10][0]->Valor)+
              ($values[($i * count($years))+$j][11][0]->Valor))/12)
            }}</td>
        @endfor
      </tr>  
      @endfor
    </tbody>
  @endif
</table>
<?php if($asterisco==1){
            echo "* Existen campos por rellenar";

          }
      ?>
 