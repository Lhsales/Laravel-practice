<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function Index()
    {
        $contatos = [
            (object)["nome"=>"Lua", "tel"=>"11975156401"],
            (object)["nome"=>"Ana", "tel"=>"11911111111"],
            (object)["nome"=>"Fernando", "tel"=>"11922222222"],
            (object)["nome"=>"Lucas", "tel"=>"11933333333"],
            (object)["nome"=>"Jose", "tel"=>"11944444444"]
        ];

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
