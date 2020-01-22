@extends('Admin.Template.index')

@section('title','Gestao TI')
    
@section('content')
    <h1> Exibindo os Produtos - views </h1>
    
        @include('Admin.Alerts.alerts',['content' => 'Alerta de preço de produtos...'])
    <hr>

        @foreach ($teste3 as $teste)
            <p class= @if ($loop->last) last @endif)>       
            {{ $teste }}
        </p>
                
        @endforeach

    <hr>
        @forelse ($teste3 as $teste)
            <p class= @if ($loop->first) last @endif>
                {{$teste}}
            </p>
        @empty
            <h1> Valor Não Informado </h1>
            
        @endforelse


    <hr>
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

@push('style')
    <style>
        .last{
            background-color: chartreuse;
            font-style: italic
            
        } 
    </style>
@endpush

@push('script')
    <script>
        document.body.style.background = '#bcbac5cc'
    </script>
@endpush
