@extends('layout')
@section('titulo')
Contactos
@endsection

@section('header')
Bem-Vindo
@endsection

@section('conteudo')
    <!--aqui fica o form-->
    <form method="post" action="{{route('processar.form')}}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="morada">Morada</label> 
        <input type="text" name="morada">
        <label for="automovel">Automóvel</label>
        <select name="automovel">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Audi">Audi</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
          
@endsection