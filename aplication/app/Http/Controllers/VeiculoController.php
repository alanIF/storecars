<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;
use Redirect;

class VeiculoController extends Controller
{
    //
    public function index(){

        $sql = 'Select * from veiculo v ';
        $veiculos = \DB::select($sql);
        
        return view('veiculos.index', ['veiculos' => $veiculos]);
    }
     // form de cadastrar
     public function new(){
        return view('veiculos.form');
    }
    public function add(Request $request){
        $veiculo= new Veiculo();
        
        $veiculo->nome=$request->nome;
       
        $veiculo->preco=$request->preco;
        $veiculo->imagem=$request->imagem;
        $veiculo->porta_malas=$request->porta_malas;


 
       
        $veiculo->save();
       
    

       
        return Redirect::to('/veiculos')->with('status', 'veiculo criado com sucesso');;
    }
    public function update($id ,Request $request){
        $veiculo= Veiculo::findOrFail($id);

        $veiculo->nome=$request->nome;
       
        $veiculo->preco=$request->preco;
        $veiculo->imagem=$request->imagem;
        $veiculo->porta_malas=$request->porta_malas;
        $veiculo->save();

        

        return Redirect::to('/veiculos')->with('status', 'veiculo atualizado com sucesso');;
    }
    public function edit($id){
        $veiculo= Veiculo::findOrFail($id);
        return view('veiculos.form', ['veiculo'=> $veiculo]);
    }
    public function delete($id){
        $veiculo= Veiculo::findOrFail($id);
            
        $veiculo->delete();

        return Redirect::to('/veiculos')->with('status', 'veiculo excluído com sucesso');;
    }
}
