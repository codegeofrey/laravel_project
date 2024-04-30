
    LISTA DE LOS EMPLEADOS
 <table class="table table-light">
   <tr>                            
    <th>#</th>
    <th>Foto</th>
    <th>Nombre</th>
    <th>P. Apellido</th>
    <th>S. Apellido</th>
    <th>Correo</th>
    <th>Accion</th>
   </tr>  

<tbody>
    

 
    @foreach ($empleados as $datos)
        <tr>
            <td>{{$datos->id}}</td>
            <td><img src="{{asset('storage').'/'.$datos->Foto}}" alt="" width="200" height="200"> 
            <td>{{$datos->Foto}}</td>
            <td>{{$datos->Nombres}}</td>
            <td>{{$datos->Primerapel}}</td>
            <td>{{$datos->Segundoapel}}</td>
            <td>{{$datos->Email}}</td>
            <td> <a href="{{url('/empleados/'.$datos->id. '/edit')}}">Editar</a>
            <form action="{{url('/empleados/')}}" method="POST" enctype="multipart/form-data">
            @csrf        
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Deseas Eliminar?')" value= Eliminar>

            </form>
            </td>
    @endforeach
    </tr>
 

</tbody>

