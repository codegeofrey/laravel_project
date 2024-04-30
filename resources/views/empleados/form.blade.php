formulario que tendra los datos para crear o actualizar los empleados
<br>
<form action="{{url('/empleado'.$empleado->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
    
    <input type="text" id="nombre" name="Nombres" placeholder="Introduzca nombre"><br>
    <input type="text" id="Primerapel" name="Primerapel" placeholder="Introduzca primer apellido"><br>
    <input type="text" id="Segundoapel" name="Segundoapel" placeholder="Introduzca segundo apellido"><br>
    <input type="email" id="correo" name="correo" placeholder="Introduzca email" ><br>
    <input type="file" id="Foto" name="Foto" ><br>
    <input type="submit" value="guardar">   
   
</form>