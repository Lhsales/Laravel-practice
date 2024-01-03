@extends('layout.site')

@section('titulo', 'Cursos')
@section('title-content', 'Cursos')

@section('conteudo')

<h3 class="center">Adicionar novo curso</h3>
<div class="row">
    <form action="{{ route('admin.cursos.salvar')}}" method="post" class="col s12" enctype="multipart/form-data">

        @include('admin.curso.include._form')
        
        <button class="btn blue">Salvar</button>
    </form>
</div>

<br>

@endsection