<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show($id){
        $produtos = ['produto 1','produto 2', 'produto 3', 'produto 4'];
        
        
        return " apresentando o produto de id:  {$id}";
    }
    //
}
