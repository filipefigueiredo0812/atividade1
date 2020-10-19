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
}
