formulario de cion de empleado
<form action="{{ url('/documento') }}" method="post" enctype="multipart/form-data">
@csrf
@include('documento.form',['modo'=>'Crear']);
</form>