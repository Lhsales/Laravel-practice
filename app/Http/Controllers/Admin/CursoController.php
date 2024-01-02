<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    //
    public function Index()
    {
        $cursos = Models\Curso::all();

        return view('admin.curso.index', compact('cursos'));
    }

    public function Adicionar()
    {
        return view('admin.curso.adicionar');
    }

    public function Salvar(Request $req)
    {
        
        $data = $req->all();

        if (isset($data['publicado']))
        {
            $data['publicado'] = 'sim';
        }
        else
        {
            $data['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem'))
        {
            $img = $req->file('imagem');

            $imgName = "imagem_" . rand(1111, 9999) . "." . $img->guessClientExtension();
            $img->move("img/cursos/", $imgName);

            $data['imagem'] = "img/cursos/" . $imgName;
        }

        Models\Curso::create($data);

        return redirect()->route('admin.cursos');
    }

    public function Editar($id)
    {
        $registro = Models\Curso::find($id);

        return view('admin.curso.editar', compact('registro'));
    }

    public function Atualizar(Request $req, $id)
    {
        $data = $req->all();        

        if (isset($data['publicado'])) {
            $data['publicado'] = 'sim';
        }
        else {
            $data['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem'))
        {
            $img = $req->file('imagem');

            $imgName = "imagem_" . rand(1111, 9999) . "." . $img->guessClientExtension();
            $img->move("img/cursos/", $imgName);

            $data['imagem'] = "img/cursos/" . $imgName;
        }

        $curso = Models\Curso::find($id);
        
        if (\File::exists($curso->imagem)){
            \File::delete($curso->imagem);
        }

        $curso->update($data);

        return redirect()->route('admin.cursos');
    }
}
