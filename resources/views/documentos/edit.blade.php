formulario de edicion de proceso
<form action="{{url('/doc/'.$documentos->doc_id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('documentos.form',['modo'=>'Editar']);
</form>