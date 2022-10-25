@extends('modelo')

@section('title')
    Pessoas
@endsection


@section('content')
   <section class="p-10">
    <div class="bg-gray-300 py-3 px-6 mb-3 text-lg font-bold text-gray-800 w-full flex justify-between">
        <div>
            Lista de Pessoas Cadastradas
        </div>
        <div class="flex justify-center items-center">
            <a href="{{ route('cadastrar.pessoas') }}" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true"
            data-mdb-ripple-color="light">Cadastrar Pessoa</a>
        </div>
    </div>

    <div class="flex flex-col shadow-lg">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
              <table class="min-w-full">
                <thead class="border-b bg-gray-300">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Nome
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Email
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Telefone
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      CPF
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Cidade
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Estado
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                      Ações
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $pessoa)
                        <tr class="border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $pessoa->name }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $pessoa->email }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $pessoa->telefone }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $pessoa->cpf }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $pessoa->estado->nome }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $pessoa->cidade->nome }}

                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-1 whitespace-nowrap">
                            <div class="flex justify-center">
                                <a title="Editar" href="{{ route('editar.pessoas', $pessoa->id) }}" data-mdb-ripple="true" data-mdb-ripple-color="light" class="mr-2 inline-block p-3 m-0 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out" style="background-color: #89c135;"><i class="fa-solid fa-pen-nib"></i></a>

                                <form action="{{ route('pessoa.delete', $pessoa->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 m-0 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out" style="background-color: #c61616;"
                                    onclick="return confirm('Tem certeza que quer apagar {{ $pessoa->name }}?')">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                              </div>
                        </td>
                        </tr>

                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>


   </section>


@endsection








@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>

    </script>
@endsection


