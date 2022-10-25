<?php

namespace App\Http\Controllers\Pessoas;

use App\Http\Controllers\Controller;
use App\Models\Pessoas\Pessoa;
use Illuminate\Http\Request;

class CadastrarPessoaController extends Controller
{


    public function store(Request $request)
    {

        $pessoa = new Pessoa();

        $pessoa->name =  $request->name;
        $pessoa->email = $request->email;
        $pessoa->telefone = $request->telefone;
        $pessoa->cpf = $request->cpf;
        $pessoa->estado_id = $request->estado_id;
        $pessoa->cidade_id = $request->cidade_id;

        $pessoa->save();

        return redirect('/');

    }
}
