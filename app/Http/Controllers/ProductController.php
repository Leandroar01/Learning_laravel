<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $teste = 123;
        $teste1 = 321;
        $teste2 = [];
        $teste3 = ['televisao', 'geladeira', 'sofa','microondas'];
        return view ('Admin.Pages.Product.app', compact('teste','teste1','teste2','teste3'));     

    }

    public function show($id){
        return "Exibindo o Produto ID: $id";
    }

    public function destroy($id){
        return "$id foi deletado com sucesso";
    }

    public function update($id){
        return "$id esta pronto para ser editado";
    }

    public function edit($id){
        return "$id esta pronto para ser EDITATO";
    }

    public function create(){
        return view ('Admin.Pages.Product.create');
      
    }
    public function store(){
        return dd ('Carregando...');
    }


}