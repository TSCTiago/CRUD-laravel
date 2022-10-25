<?php

namespace App\Http\Controllers\Pessoas;

use App\Http\Controllers\Controller;
use App\Models\Pessoas\Pessoa;
use Illuminate\Http\Request;

class DeletarPessoa extends Controller
{
    public function destroy($id)
    {
        if (!$pessoa = Pessoa::find($id))
            return redirect()->route('home');

        $pessoa->delete();
        return redirect()->route('home');
    }
}
