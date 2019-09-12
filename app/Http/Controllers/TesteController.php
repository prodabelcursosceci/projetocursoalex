<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesteController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAge');    
        $this->middleware('throttle:100,1');
    }


    public function index(Request $req)
    {
        
       $validador = Validator::make($req->all(),[
           'nome'=>'required|max:10|alpha|ends_with:a'
       ]);

       if($validador->fails()){
           $errors = $validador->errors()->all();
       }

       $nome = $req->nome;
       $ole = 'numdo!';
        //dd($req);
        echo "Hello wooorld!, $nome <br>";
        $ola = 'sdssdfsdf';
        return view('index',compact(['nome','ola', 'errors'])); 
    }

    public function indexPost(Request $req){

        return "Postei $req->telefone";
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
