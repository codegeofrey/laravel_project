@extends('layouts.app')
@section('content') 
 
 <div class="container"></div>
 
 @if (Session::has('mensaje'))
     {{Session::get('mensaje')}}
     
 @endif

 <a href="{{url('/empleados/create')}}" class="btn btn-success">Registrar nuevo empleado</a>

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
            <div class="d-flex">
            <td> <a href="{{url('/empleados/'.$datos->id. '/edit')}}" class="btn btn-primary w-100 ">Editar</a>
                <br>
            <form action="{{url('/empleados/')}}" method="POST" enctype="multipart/form-data">
            @csrf        
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Deseas Eliminar?')" class="btn btn-danger w-100" value= Eliminar >

            </form>
            </div>
            </td>
    @endforeach
    </tr>
  
</tbody>
</table>
</div>
@endsection