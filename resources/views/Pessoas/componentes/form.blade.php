<div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <div class="relative">
            <input type="text" name="name" id="floating_filled"
                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " value="{{ $pessoa->name ?? '' }}" />
            <label for="floating_filled"
                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nome</label>
        </div>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <div class="relative">
            <input type="email" name="email" id="floating_filled"
                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " value="{{ $pessoa->email ?? '' }}" />
            <label for="floating_filled"
                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Email</label>
        </div>
    </div>


</div>
<div class="grid md:grid-cols-2 md:gap-6">

    <div class="relative z-0 mb-6 w-full group">
        <div class="relative">
            <input type="tel" name="telefone" id="floating_filled"
                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " value="{{ $pessoa->telefone ?? '' }}" />
            <label for="floating_filled"
                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Telefone</label>
        </div>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <div class="relative">
            <input type="text" name="cpf" id="floating_filled"
                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " value="{{ $pessoa->cpf ?? '' }}" />
            <label for="floating_filled"
                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">CPF</label>
        </div>
    </div>


</div>
<div class="grid md:grid-cols-2 md:gap-6">

    <div class="relative z-0 mb-6 w-full group">
        <div class="relative">
            {{-- <input type="text" name="estado" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $pessoa->estado ?? "" }}"/> --}}
            <select name="estado_id" id="estado"
                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                <option value="{{ $pessoa->estado_id ?? '' }}" selected>{{ $pessoa->estado->nome ?? 'Selecione um estado' }}</option>
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id ?? '' }}">{{ $estado->nome ?? '' }}</option>
                @endforeach
            </select>
            <label for="estado"
                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Estado</label>
        </div>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <div class="relative">
            <select name="cidade_id" id="cidade"
                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                {{-- <option value="">Selecione uma cidade...</option> --}}
                <option value="{{ $pessoa->cidade_id ?? '' }}" selected>{{ $pessoa->cidade->nome ?? 'Selecione uma cidade...' }}</option>

            </select>
            <label for="cidade"
                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Cidade</label>
        </div>
    </div>


</div>
<div class="flex">
    <button type="button"
        class="mr-2 inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
        data-mdb-ripple="true" data-mdb-ripple-color="light">Cancelar</button>

    <button type="submit"
        class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"
        data-mdb-ripple="true" data-mdb-ripple-color="light">Salvar</button>
</div>


<script>
    $(document).ready(function() {
        $('#estado').change(function(e) {
            let selectCidade = $('#cidade');
            let id = $('#estado').val();
            console.log(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('filtro.cidade.estado') }}",
                data: {
                    id
                },
                type: "post",
                dataType: "json",
                success: function(cidades) {
                    let cidadesOption = ''
                    cidadesOption += `<option value="">Selecione uma cidade...</option>`;
                    cidades.forEach(cidade => {
                        cidadesOption += `<option value="${cidade.id}">${cidade.nome}</option>`;
                        console.log(cidade.nome);
                    });
                    selectCidade.html(cidadesOption);
                }
            });
        });
    });
</script>
