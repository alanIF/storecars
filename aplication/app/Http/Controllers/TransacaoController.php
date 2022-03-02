<?php

namespace App\Http\Controllers;

use App\Models\Transacao;

use App\Models\Veiculo;
use App\Models\User;

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
        $veiculos = Veiculo::get();
        $usuarios = User::get();
        $dados = array("veiculos"=> $veiculos, "usuarios"=> $usuarios);
        
        return view('transacoes.form', ['dados'=> $dados]);
    }
    public function add(Request $request){
        $transacao= new Transacao();
        
        $transacao->nome=$request->nome;
       
        


 
       
        $transacao->save();
       
    

       
        return Redirect::to('/transacao')->with('status', 'transação criada com sucesso');;
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
        $transacao= Transacao::findOrFail($id);
            
        $transacao->delete();

        return Redirect::to('/transacao')->with('status', 'transacao excluído com sucesso');;
    }
}
