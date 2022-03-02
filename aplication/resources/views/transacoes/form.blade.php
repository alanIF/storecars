@extends('layouts.app', ['activePage' => 'Transacacoes', 'titlePage' => 'Transacacoes'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Transações</h4>
          </div>
          <div class="card-body">
          @if(Request::is('*/edit'))
            <form action="{{url('veiculos/update')}}/{{$veiculo->id}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="nome" placeholder="nome" value="{{$veiculo->nome}}" required>
            </div>
         
            <div class="mb-3">
                <input type="number" class="form-control" name="preco" placeholder="Preço" value="{{$veiculo->preco}}" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="porta_malas" placeholder="Porta malas" value="{{$veiculo->porta_malas}}"  required>
            </div>
            <div class="mb-3">
                <textarea class="imagem" name="imagem" required>{{$veiculo->imagem      }}</textarea>
            </div>
           
           

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a class="btn btn-warning " href="{{url('transacao/')}}">Voltar</a>

            </form>
            @endif
            @if(Request::is('*/new'))

            <form action="{{url('transacao/add')}}" method="post" enctype="multipart/form-data"> 
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="descricao" placeholder="Descricao" required>
            </div>
            <div class="mb-3">
            <select class="form-control" id="tipo" name="tipo">
                <option value="1">Entrada</option>
                <option value="2">Venda</option>
               
            </select>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="quantidade" placeholder="Quantidade" required>
            </div>
            <div class="mb-3">
            <select class="form-control" id="usuario" name="usuario">
            @foreach($dados["usuarios"] as $u)
            <option value="{{$u->id}}"> {{$u->name}}</option>
                            
            @endforeach   
            </select>
            </div>
            <div class="mb-3">
            <select class="form-control" id="veiculo" name="veiculo">
            @foreach($dados["veiculos"] as $v)
            <option value="{{$v->id}}"> {{$v->nome}}</option>
                            
            @endforeach   
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
            <a class="btn btn-warning " href="{{url('transacao/')}}">Voltar</a>

            
            </form>
            @endif
          </div>
        </div>
      </div>
  
    </div>
  </div>
</div>
@endsection