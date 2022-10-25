@extends('modelo')

@section('title')
    Cadastrar Pessoa
@endsection

@section('content')
    <section class="p-10">
        <div class="shadow-lg bg-gray-300 py-3 px-6 mb-3 text-lg font-bold text-gray-800 w-full flex justify-between mb-4">
            <div>
                Cadastrar Pessoa
            </div>
        </div>
        <form action="{{ route('pessoa.salvar') }}" method="post" class="shadow-lg p-10">
            @csrf
            @include('Pessoas.componentes.form')
        </form>
    </section>
@endsection

@section('scripts')

@endsection
