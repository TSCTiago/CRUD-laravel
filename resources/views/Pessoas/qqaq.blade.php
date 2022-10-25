@extends('layout')

@section('title')
    Cadastrar Clientes
@endsection

@section('content')
<form class="form-horizontal" action="{{ route('salvar.cliente') }}" method="POST">
  @csrf

  @include('componentes.formulario')

</form>

<a href="{{ route('estados') }} " class="btn btn-success mt-2" >VER ESTADOS</a>

<br>

<a href="{{ route('cidades') }}" class="btn btn-success mt-2">VER CIDADES</a>

<br>

<a href="{{ route('cliente') }}" class="btn btn-success mt-2">VER CLIENTES</a>


@endsection

@section('scripts')

@endsection


