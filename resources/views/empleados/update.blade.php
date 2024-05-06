@extends('layouts.app')
@section('content') 
 


<div class="container">
    <a href="{{url('/empleados')}}">Regresar</a>
    @csrf        
    {{method_field('PATCH')}}
    @include('empleados.form',['modo'=>'Actualizar'])
</form>   
</div>

@endsection