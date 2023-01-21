@extends('layouts.index')

@section('content')
<div class="oculto-impresion">
    <a href="{{Route('addClient')}}"> Insertar cliente</a>

    <a href="{{ Route('projects') }}">Proyectos</a>
    <a href="{{ Route('materials') }}">Gestion de materiales</a>

</div>

@endsection



