@extends('Admin.Template.index')

@section('title','Cadastrando Produtos')
    
@section('content')
    <h1> Cadastrando de Produtos</h1>

    <form action={{route('product.store')}} method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder = "Nome...">
        <input type="text" name="description" placeholder = "Descrição...">
        <input type="file" name="photo">
        <button type="submit" onclick=>Enviar</button>
    </form>

@endsection

