<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{
    
    public function create(){

        return view ('produtos.create');
    }

    public function store (Request $request){
  
    //    dd($request->all());  so para testar se os produtos chegam ao array, o dd debug or die lanca os dados no formato json:::::::
    
        produto::create([
      
         'nome'=>$request->nome,
         'custo'=>$request->custo,
         'preco'=>$request->preco,
         'quantidade'=>$request->quantidade

    ]);
     return "Hey denny produto registado com sucesso! congrats!";
 }
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 public function show($id){
   $produto=produto::findOrFail($id); 
   return view ('produtos.show', ['produtos'=>$produto]);

 }
    //
}
