@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
</head>

<a href="{{ url('documento/create')}}"> Registrar nuevo documento</a>
<a href="{{url('/logout') }}">
            salir  </a>
<table class="table table-dark" id="documento">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Prefijo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $documentos as $documento )
        <tr>
            <td>{{$documento->tip_id}}</td>
            <td>{{$documento->tip_nombre}}</td>
            <td>{{$documento->tip_prefijo}}</td>
            <td>
                <a href="{{url('/documento/'.$documento->tip_id.'/edit') }}">Editar</a>
                <form action="{{ url('/documento/'.$documento->tip_id) }}" method="post">
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
    $('#documento').DataTable({
        responsive: true
    });
</script>