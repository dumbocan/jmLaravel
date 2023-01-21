@extends('layouts.index')

@section('content')
<div>
    <a href="{{ Route('customers') }}">Clientes</a>
    <a href="{{ Route('projects') }}">Proyectos</a>
    <a href="{{ Route('materials') }}">Materiales</a>

</div>

@endsection



