@extends('layout')
@section('titulo')
Layout
@endsection
@section('header')
Bem-Vindo
@endsection


@section('conteudo')
<h2>Caro visitante,</h2>
<h1>seja bem-vindo.</h1>
<p>Esta é uma página feita em Blade...</p>


<a href="{{route('entrada.index')}}">Entrada</a>
<br>
<a href="{{route('tarefas.home')}}">Tarefas</a>
<br>
<a href="{{route('equipas.index')}}">Equipas</a>
<br>
<br>
<br>
<img src="{{asset('imagens\imagem.jpg')}}">


@endsection