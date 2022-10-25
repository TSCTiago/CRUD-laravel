<?php

namespace App\Http\Controllers\Testes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesteController extends Controller
{
    public function index()
    {
        $estados = DB::table('estado')->get();
        $cidades = DB::table('cidade')->get();

        
        return view('Teste.Teste', compact('estados', 'cidades'));
    }
}
