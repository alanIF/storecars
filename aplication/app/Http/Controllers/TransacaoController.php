<?php

namespace App\Http\Controllers;

use App\Models\Transacao;
use Illuminate\Http\Request;
use Redirect;

class TransacaoController extends Controller
{
     //
     public function index(){

        $sql = 'Select t.id id, u.name cliente, v.nome veiculo, t.descricao descricao , t.quantidade quantidade, t.data_operacao data_operacao, t.tipo tipo from users u, veiculo v, transacao t where t.user_id= u.id and t.id_veiculo= v.id';
        $transacoes = \DB::select($sql);
        
        return view('transacoes.index', ['transacao' => $transacoes]);
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
