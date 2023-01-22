@extends('layouts.index')

@section('content')
<<<<<<< HEAD
<div class="oculto-impresion">
    <a href="{{Route('addClient')}}"> Insertar cliente</a>

    <a href="{{ Route('projects') }}">Proyectos</a>
    <a href="{{ Route('materials') }}">Gestion de materiales</a>
=======
<div>
    <a href="{{ Route('customers') }}">Clientes</a>
    <a href="{{ Route('projects') }}">Proyectos</a>
    <a href="{{ Route('materials') }}">Materiales</a>
>>>>>>> rama2

</div>

@endsection



