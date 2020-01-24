@extends('Admin.Template.index')

@section('title','Cadastrando Produtos')
    
@section('content')
    <h1> Cadastrando de Produtos</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
        @endforeach
          
    @endif

    <form action={{route('product.store')}} method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder = "Nome...">
        <input type="text" name="description" placeholder = "Descrição...">
        <input type="file" name="photo">
     
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>

@endsection

