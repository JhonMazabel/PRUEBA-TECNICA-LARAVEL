formulario de edicion de proceso
<form action="{{url('/documento/'.$documento->tip_id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('documento.form',['modo'=>'Editar']);
</form>