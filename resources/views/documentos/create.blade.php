formulario de cion de empleado
<form action="{{ url('/doc') }}" method="post" enctype="multipart/form-data">
@csrf
@include('documentos.form',['modo'=>'Crear'])
</form>