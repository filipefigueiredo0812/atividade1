<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    
    public function index () {
        return view('entrada');
        
    }
    
    
    
    
    
    
    
    
    public function listarEquipas () {
        $lista=[
            'Equipa 1',
            'Equipa 2',
            'Equipa 3'
        ];
        return view('equipa', ['equipas'=>$lista]);
    }
    
    
    
    
    public function listarEquipa (Request $request) {
        $teams=[
            'Equipa 1',
            'Equipa 2',
            'Equipa 3'
        ];
        //obter o nome da equipa pretendida através do ID
        

        //        dd($request->chave);
        
        $a = $request->chave;
        if($a > 0 && $a < count($teams)){
            $equipa = $teams[$request->chave];
            return view('equipa', ['equipa'=>$equipa]);
        }
        else{
            return view('erro');
        }
           
            
        
    }
    }
