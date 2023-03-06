formulario de edicion de proceso

<form action="{{url('/proceso/'.$proceso->pro_id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('proceso.form',['modo'=>'Editar']);
</form>