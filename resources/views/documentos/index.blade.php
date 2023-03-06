@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
</head>

<center>
<div>
    <a href="{{ url('doc/create')}}"> Registrar nuevo documento</a>
    <a href="{{url('/logout') }}">Salir</a>
</div>
</center>



<table class="table table-dark" id="documentos">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Contenido</th>
            <th>Tipo Documento</th>
            <th>Tipo Proceso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($documentos as $documento )
        <tr>
            <td>{{$documento->doc_id}}</td>
            <td>{{$documento->doc_nombre}}</td>
            <td>{{$documento->doc_codigo}}</td>
            <td>{{$documento->doc_contenido}}</td>
            <td>{{ isset($documento->doc_id_tipo) ? $documento->doc_id_tipo->tip_nombre : ""}}</td>
            <td>{{ isset($documento->doc_id_proceso) ? $documento->doc_id_proceso->pro_nombre : ""}}</td>
            <td>

            
                <a href="{{url('/doc/'.$documento->doc_id.'/edit') }}">Editar</a>
                <form action="{{ url('/doc/'.$documento->doc_id) }}" method="post">
                @csrf
                {{method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿desea borrar?')"  value="Borrar">   
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $('#documentos').DataTable({
        responsive: true
    });
</script>