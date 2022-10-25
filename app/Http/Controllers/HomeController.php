<?php

namespace App\Http\Controllers;

use App\Models\Pessoas\Pessoa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        // dd($pessoas);
        return view('Pessoas.pessoas', compact('pessoas'));
    }
}
