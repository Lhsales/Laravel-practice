@extends('layout.site')

@section('titulo', 'Login')
@section('title-content', 'Entrar')

@section('conteudo')


<div class="row center">
    <form action="{{ route('login.entrar') }}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="input-field">
              <input placeholder="E-mail" id="email" name="email" type="text" class="validate" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}">
              <label for="email">E-mail</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field">
              <input placeholder="Senha" id="senha" name="senha" type="password" class="validate" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}">
              <label for="senha">Senha</label>
            </div>
        </div>

        <button class="btn deep-blue">Entrar</button>

    </form>
    
    
</div>


@endsection