<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public $teams = [
            'Equipa 1',
            'Equipa 2',
            'Equipa 3'
        ];
    
    
    
    
    
    public function index () {
        return view('entrada');
        
    }
    
    
    
    
    public function listarEquipa (Request $r) {
        $chave = $r -> chave; 
        if(isset($chave)){
        
            //        dd($r->chave); 
            if($chave >= 0 && $chave < count($this->teams)){
                $equipa = $this->teams[$r->chave];
                return view('equipa', ['equipa'=>$equipa]);
            }
            else{
                return view('erro');
            }
        }
        else{
            return view('equipa', ['equipas'=>$this->teams]);
        }
    }
    
    
    public function mostrarContacto (){
        return view('contacto');
    }
    
    public function processarForm (Request $request){
        $nome = $request->nome;
        $morada = $request->morada;
        $automovel = $request->automovel;
        
        return view('processar', [
            'nome'=>$nome,
            'morada'=>$morada,
            'automovel'=>$automovel
        ]);
    }
    
    
    
    Public function mostrarForm (){
        
        return view('contacto');
    }
    
}
