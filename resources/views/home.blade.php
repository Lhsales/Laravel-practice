@extends('layout.site')

@section('titulo', 'Home')
@section('title-content', 'Bem vindo ao meu site Laravel')

@section('conteudo')

<h1 class="center">Lista de Cursos</h1>

<div class="row">
    @foreach ($cursos as $registro)
      <div class="col s12 m3">
        <div class="card">
          <div class="card-image">
            <img src="{{asset($registro->imagem)}}" style="height: 200px">
          </div>
          <div class="card-content">
            <span class="card-title">{{ $registro->titulo }}</span>
            <p> {{ $registro->descricao }} </p>
          </div>
        </div>
      </div>
    @endforeach
    
    
</div>


@endsection