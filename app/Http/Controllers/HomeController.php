<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class HomeController extends Controller
{
    public function Index()
    {
        $cursos = Models\Curso::all();

        return view('home', compact('cursos'));
    }
}
