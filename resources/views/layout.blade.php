<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/fa.css')}}"> 
    </head>
    <body>
        <h1 style="color:blue;">@yield('header')</h1>
        @yield('conteudo')
        <div class="menu-rodape">
            <h2>Opções de navegação</h2>
            <a href="{{route('entrada.index')}}"><i class="fas fa-american-sign-language-interpreting"></i>Entrada</a>
            <br>
            <a href="{{route('equipas.index')}}">Ver equipas</a>
            
        </div>
        
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/fa.js')}}"></script>
    </body>
</html>
