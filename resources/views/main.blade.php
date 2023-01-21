@extends('layouts.index')

@section('content')
<div>
    <a href="{{ Route('projects') }}">Clientes</a>
    <a href="{{ Route('customers') }}">Proyectos</a>
    <a href="{{ Route('materials') }}">Materiales</a>

</div>

@endsection



