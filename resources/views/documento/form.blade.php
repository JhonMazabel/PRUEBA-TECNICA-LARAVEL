formulario que tendran datos en comun con create y edit 
<h1> {{$modo}} Documento</h1>

<br>
<label for="Nombre"> Nombre</label>
<input type="text" name="tip_nombre" value="{{isset($documento->tip_nombre)?$documento->tip_nombre:''}}" id="tip_nombre">
<br>

<label for="Prefijo"> Prefijo </label>
<input type="text" name="tip_prefijo" value="{{isset($documento->tip_prefijo)?$documento->tip_prefijo:''}}" id="tip_prefijo">
<br>


<input type="submit" value="{{$modo}} Datos ">

<a href="{{ url('documento/')}}"> Regresar</a>

<br>