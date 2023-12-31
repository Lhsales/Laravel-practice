<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
    </head>
    <body>
        @include('layout.include.top')
        <main>
            <div class="container">
                <h2 class="center">@yield('title-content')</h2>
            </div>
            
            <div class="container">
            
                @yield('conteudo')
            
            </div>
        </main>
        @include('layout.include.footer')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
        <script type="text/javascript">
            $(document).ready(function(){
                $('.sidenav').sidenav();
            });
        </script>
    </body>
</html>