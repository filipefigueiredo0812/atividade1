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
        return view('equipa');
    }
}
