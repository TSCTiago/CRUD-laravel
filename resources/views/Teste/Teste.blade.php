@extends('modelo')

@section('title')
    Teste
@endsection


@section('content')
    <div>
        <ol>
            @foreach ($estados as $estado)
                <li>Estado:{{ $estado->uf }}</li>
            @endforeach
        </ol>
    </div>



@endsection








@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>

    </script>
@endsection


