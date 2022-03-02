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
                <input type="text" class="form-control" name="descricao" placeholder="nome" value="{{$veiculo->nome}}" required>
            </div>
            <div class="form-group">
            <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
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