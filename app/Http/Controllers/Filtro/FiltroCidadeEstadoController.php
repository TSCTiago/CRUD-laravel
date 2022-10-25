<?php

namespace App\Http\Controllers\Filtro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FiltroCidadeEstadoController extends Controller
{
    public function filter(Request $request)
    {
        $estadoId = $request->id;

        $cidades = DB::table('cidade')->where('uf', $estadoId)->get();

        return response()->json($cidades, 200);
    }
}
