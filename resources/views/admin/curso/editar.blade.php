@extends('layout.site')

@section('titulo', 'Cursos')
@section('title-content', 'Cursos')

@section('conteudo')

<h3 class="center">Editar curso</h3>
<div class="row">
    <form method="POST" action="{{ route('admin.cursos.atualizar', $registro->id) }}"  class="col s12" enctype="multipart/form-data">
        
        @include('admin.curso.include._form')
        
        <button type="submit" class="btn blue">Atualizar</button>
    </form>
</div>

<br>

@endsection