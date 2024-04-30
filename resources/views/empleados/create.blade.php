FORMULARIO PARA CREAR EMPLEADOS
<br>
<form action="{{url('/empleado')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('empleados.form')

</form>    

