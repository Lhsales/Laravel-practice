<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function Index()
    {
        return view('login.index');
    }

    public function Entrar(Request $req)
    {
        $data = $req->all();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['senha']]))
        {
            return redirect()->route('admin.cursos');
        }

        return redirect()->route('login');
    }

    public function Sair(Request $req)
    {
        Auth::logout();
        return redirect()->route('home');    
    }
}
