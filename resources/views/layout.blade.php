<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1 style="color:blue;">@yield('header')</h1>
        @yield('conteudo')
        <div class="menu-rodape">
            <h2>Opções de navegação</h2>
            <a href="{{route('entrada.index')}}">Entrada</a>
            <br>
            <a href="{{route('equipas.index')}}">Ver equipas</a>
        
        </div>
    </body>
</html>
