@extends('Admin.Template.index')

@section('title','Gestao TI')
    

@section('content')
    <h1> Exibindo os Produtos - views </h1>
    @if ($teste === '123')
        <p> Teste IF Ok </p>

    @elseif($teste == '123')
        <p> Teste elseif OK</p>

    @else
        <p> Teste else ok </p>
        
    @endif

    @unless ($teste === '123')
    <p> Teste unless ok </p>
                
    @endunless

    @isset($teste1)
    <p> {{ $teste1 }} </p>
        
    @endisset

    @empty($teste2)
    <p> vazio... </p>
        
    @endempty
    
@endsection

