<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $req)
    {
        $nome = $req->nome;
        //dd($req);
        echo "Hello wooorld!, $nome";
        return view('welcome'); 

    }

    public function index2($nome, $idade=mull)
    {
        echo "Hello wooorld!, $nome!<br>";
        if($idade){
            echo "vc tem, $idade anos <br>";
        }
        
        return view('welcome'); 

    }
}
