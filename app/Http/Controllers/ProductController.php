<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $teste = 123;
        $teste1 = 321;
        $teste2 = [];
        return view ('Admin.Pages.Product.app', compact('teste','teste1','teste2'));     

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
        return 'Produto criado com sucesso';
    }
      
    
    public function store(){
        return 'Produto store com sucesso';
    }


}