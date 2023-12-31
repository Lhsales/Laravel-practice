@extends('layout.site')

@section('titulo', 'Contatos')
@section('title-content', 'Contatos')

@section('conteudo')

<div>
    <h3>Essa é a view Index</h3>

    <table class="table">
        <thead>
            <tr>
                <th> Nome </th>
                <th> Telefone </th>
                <th> Dt. Atualização </th>
                <th> Dt. Criação </th>
            </tr>
        </thead>
    
        @foreach ($contatos as $item)
        <tr>
            <td scope="col-7"> {{ $item->nome }} </td>
            <td scope="col"> {{ $item->tel }} </td>
            <td scope="col"> {{ (string)$item->updated_at }} </td>
            <td scope="col"> {{ (string)$item->created_at }} </td>
        </tr>
        @endforeach
    
    </table>
</div>

@endsection