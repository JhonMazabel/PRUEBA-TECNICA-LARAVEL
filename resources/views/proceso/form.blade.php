formulario que tendran datos en comun con create y edit 
<h1> {{$modo}} Proceso</h1>

<br>
<label for="Nombre"> Nombre</label>
<input type="text" name="pro_nombre" value="{{isset($proceso->pro_nombre)?$proceso->pro_nombre:''}}" id="pro_nombre">
<br>

<label for="Prefijo"> Prefijo </label>
<input type="text" name="pro_prefijo" value="{{isset($proceso->pro_prefijo)?$proceso->pro_prefijo:''}}" id="pro_prefijo">
<br>


<input type="submit" value="{{$modo}} Datos ">

<a href="{{ url('proceso/')}}"> Regresar</a>

<br>