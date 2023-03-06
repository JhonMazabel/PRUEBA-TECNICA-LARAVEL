formulario que tendran datos en comun con create y edit 
<h1> {{$modo}} Documento</h1>

<br>
<label for="Nombre"> Nombre: </label>
<input type="text" name="doc_nombre" value="{{isset($documentos->doc_nombre)?$documentos->doc_nombre:''}}" id="doc_nombre">
<br>

<label for="Codigo"> Codigo: </label>
<input type="text" name="doc_codigo" value="{{isset($documentos->doc_codigo)?$documentos->doc_codigo:''}}" id="doc_codigo">
<br>

<label for="Contenido"> Contenido: </label>
<input type="text" name="doc_contenido" value="{{isset($documentos->doc_contenido)?$documentos->doc_contenido:''}}" id="doc_contenido">
<br>

<label for="Tipo Documento"> Tipo Documento: </label>
<select name="doc_id_tipo">
    @foreach($tipos_documentos as $tipo_documento)
        <option value="{{$tipo_documento->tip_id}}">{{ $tipo_documento->tip_nombre}}</option>
    @endforeach
</select>
<br>

<label for="Tipo Proceso"> Tipo Proceso: </label>
<select name="doc_id_proceso">
    @foreach($tipos_procesos as $tipos_proceso)
        <option value="{{$tipos_proceso->pro_id}}">{{ $tipos_proceso->pro_nombre}}</option>
    @endforeach
</select>
<br>

<input type="submit" value="{{$modo}} Datos ">

<a href="{{ url('doc/')}}"> Regresar</a>

<br>