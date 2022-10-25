<?php

namespace App\Http\Controllers\Pessoas;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PessoasController extends Controller
{
    public function index()
    {
        $estados = DB::table('estado')->get();

        return view('Pessoas.cadastrar-pessoa', compact('estados'));
    }
}
