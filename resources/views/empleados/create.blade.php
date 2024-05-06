@extends('layouts.app')
@section('content') 

<div class="container">
    <a href="{{url('/empleados')}}">Listar empleados</a>
<br>
<form action="{{route('empleados.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('empleados.form',['modo'=>'CREAR'])
</form>    
</div>

@endsection