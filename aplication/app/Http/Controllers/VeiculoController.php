<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    //
    public function index(){

        $sql = 'Select * from veiculos v ';
        $veiculos = \DB::select($sql);
        
        return view('veiculos.index', ['veiculos' => $veiculos]);
    }
}
