@extends('layouts.plantilla')

@section('content')


<form action="{{route('producto.store')}}" method="POST">
    @csrf
    
    <label> 
        nombre
     <input type="text" name="nombre">
    </label>

    <br><br>
    <label> 
        descripcion
     <input type="text" name="descripcion">
    </label>

    <br><br>
    <label> 
        precio
     <input type="number" name="precio">
    </label>

    <br><br>
    <label> 
        existencias
     <input type="text" name="existencias">
    </label>
    <label> 
        proveedor
     <input type="text" name="proveedor">
    </label>



    <br><br>
    <button type="submit">Enviar formulario</button>



</form>
    
@endsection