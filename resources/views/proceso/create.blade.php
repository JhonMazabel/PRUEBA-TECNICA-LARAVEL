formulario de cion de empleado
<form action="{{ url('/proceso') }}" method="post" enctype="multipart/form-data">
@csrf
@include('proceso.form',['modo'=>'Crear']);
</form>