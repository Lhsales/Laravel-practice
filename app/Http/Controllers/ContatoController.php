<?php

namespace App\Http\Controllers;


use App\Models;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function Index()
    {
        $contatos = Models\Contato::all();

        return view('contato.index', compact('contatos'));
    }
    public function Criar(Request $req)
    {
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }
    public function Editar()
    {
        return "Esse é o Editar do ContatoController";
    }

}
