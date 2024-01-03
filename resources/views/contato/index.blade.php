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
                <th> Email </th>
            </tr>
        </thead>
    
        @foreach ($contatos as $item)
        <tr>
            <td scope="col-7"> {{ $item->nome }} </td>
            <td scope="col"> {{ $item->tel }} </td>
            <td scope="col"> {{ $item->email }} </td>
        </tr>
        @endforeach
    
    </table>
</div>

@endsection