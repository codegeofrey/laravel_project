<br>
formulario que tendra los datos para crear o actualizar los empleados
<br>
<h1>{{$modo}} Empleados</h1>
    
    <input type="text"   value={{isset($empleado->Nombres)?$empleado->Nombres:''}}  name="Nombres" id="Nombres" placeholder="Introduzca nombre"><br>
    <br>
    <input type="text"   value={{isset($empleado->Primerapel)?$empleado->Primerapel:''}} name="Primerapel" id="Primerapel" placeholder="Introduzca primer apellido"><br>
    <br>
    <input type="text"   value={{isset($empleado->Segundoapel)?$empleado->Nombres:''}} name="Segundoapel" id="Primerapel" placeholder="Introduzca segundo apellido"><br>
    <br>
    <input type="email"  value={{isset($empleado->correo)?$empleado->Nombres:''}}  name="correo" id="correo" placeholder="Introduzca email" ><br>
    <br>
    @if(isset($empleado->Foto))
    <td><img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200" height="200"> 
    @endif
    <br><br>
    <input type="submit" value="{{$modo}} Registro " class="btn btn-success">
<br>
<br>
<br>  
   
  

</form>