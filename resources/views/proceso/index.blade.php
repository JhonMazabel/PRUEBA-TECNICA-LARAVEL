@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
</head>
<a href="{{ url('proceso/create')}}"> Registrar nuevo proceso</a>
<a href="{{url('/logout') }}"> salir  </a>
<table class="table table-dark" id="proceso">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Prefijo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $procesos as $proceso )
        <tr>
            <td>{{$proceso-> pro_id}}</td>
            <td>{{$proceso->pro_nombre}}</td>
            <td>{{$proceso->pro_prefijo	}}</td>
            <td>
                <a href="{{url('/proceso/'.$proceso->pro_id.'/edit') }}">Editar </a>
                <form action="{{ url('/proceso/'.$proceso->pro_id) }}" method="post">
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
    $('#proceso').DataTable({
        responsive: true
    });
</script>

