<?php

namespace App\Http\Controllers\Pessoas;

use App\Http\Controllers\Controller;
use App\Models\Pessoas\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditarPessoaController extends Controller
{
    public function index($id)
    {
        $pessoa = Pessoa::find($id);
        $estados = DB::table('estado')->get();

        return view('Pessoas.editar-pessoa', compact('pessoa', 'estados'));
    }

    public function edit(Request $request, $id)
    {
        // dd($request->all());
        $pessoa = $request->all();

        if (!$pessoaSalva = Pessoa::find($id)){
            return 'falhou' ;
        }

    //$data = $request->all();
    $pessoaSalva->update($pessoa);

    return redirect()->route('home')->with('msg', 'Cliente ' . $pessoaSalva->name . ' editado(a) com sucesso');

    }
}
