FORMULARIO PARA ACTUALIZAR LOS DATOS DE LOS EMPLEADOS

<form action="{{url('/empleados/'. $empleado->id)}}" method="POST" enctype="multipart/form-data">
    @csrf        
    {{method_field('PATCH')}}
    @include('empleados.form')
</form>   
