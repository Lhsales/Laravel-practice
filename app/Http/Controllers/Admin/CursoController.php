<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class CursoController extends Controller
{
    //
    public function Index(){
        $cursos = Models\Curso::all();

        return view('admin.curso.index', compact('cursos'));
    }
}
