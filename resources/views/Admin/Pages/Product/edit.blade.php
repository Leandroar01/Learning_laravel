@extends('Admin.Template.index')

@section('title','Edição de Produto')
    
@section('content')
<h1> Editando de Produtos {{$id}} </h1>
 
    <form action={{route('product.update',$id)}} method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Produto 1">
        <input type="text" name="name" placeholder="Produto 2 ">
        <button type="submit">Enviar</button>
    </form>
    
@endsection