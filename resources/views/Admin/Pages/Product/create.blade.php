@extends('Admin.Template.index')

@section('title','Cadastrando Produtos')
    
@section('content')
    <h1> Cadastrando de Produtos</h1>

    <form action={{route('product.store')}} method="post">
        @csrf
        <input type="text" name="name" placeholder = "Nome...">
        <input type="text" name="name" placeholder = "Nome...">
        <button type="submit" onclick=>Enviar</button>
    </form>

@endsection