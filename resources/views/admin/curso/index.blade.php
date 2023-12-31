@extends('layout.site')

@section('titulo', 'Cursos')
@section('title-content', 'Cursos')

@section('conteudo')

<h3>Lista de cursos registrados:</h3>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th> Título </th>
                <th> Imagem </th>
                <th> Publicado </th>
                <th> Dt. Atualização </th>
                <th> Dt. Criação </th>
                <th> </th>
                <th> </th>
            </tr>
        </thead>
    
        @foreach ($cursos as $item)
        <tr>
            <td scope="col"> {{ $item->titulo }} </td>
            <td scope="col"> <img src="{{asset($item->imagem)}}" alt="{{ $item->titulo }}"> </td>
            <td scope="col"> {{ $item->publicado }} </td>
            <td scope="col"> {{ (string)$item->updated_at }} </td>
            <td scope="col"> {{ (string)$item->created_at }} </td>
            <td scope="col"> <a class="btn deep-orange" href="{{ route('admin.cursos.editar', $item->id) }}">Editar</a> </td>
            <td scope="col"> <a class="btn red" href="{{ route('admin.cursos.deletar', $item->id) }}">Deletar</a> </td>
        </tr>
        @endforeach
    
    </table>
</div>
<div class="row">
    <a class="btn blue" href="{{ route('admin.cursos.adicionar')}}">Adicionar novo curso</a>
</div>

@endsection