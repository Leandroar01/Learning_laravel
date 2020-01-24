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
        return dd("Editanto produto - {$id}");
    }

    public function edit($id){
        return view('Admin.Pages.Product.edit',compact('id'));
    }
        public function create(){
        return view ('Admin.Pages.Product.create');
      
    }
    public function store(StoreUpdateProductRequest $request){
    
           if ($request->file('photo')->isValid()) {//valida se o arquivo nao esta com algum problema.
            //modelo de envio sem personalizacao do nome do arquivo
           // dd( $request->photo->store('Products')); 
           //mode onde é possivel personalizar o nome do arquivo salvo
           $namefile = $request ->name . "." . $request->photo->extension();
           dd($request -> file ('photo') -> storeAs ('Products',$namefile));
    
            
        }

    }


}