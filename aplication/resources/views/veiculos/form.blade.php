@extends('layouts.app', ['activePage' => 'veiculos', 'titlePage' => 'Veiculos'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Veículos</h4>
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
            <a class="btn btn-warning " href="{{url('veiculos/')}}">Voltar</a>

            </form>
            @endif
            @if(Request::is('*/new'))

            <form action="{{url('veiculos/add')}}" method="post" enctype="multipart/form-data"> 
            @csrf
            
            <div class="mb-3">
                <input type="text" class="form-control" name="nome" placeholder="nome" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="preco" placeholder="Preço" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="porta_malas" placeholder="Porta malas" required>
            </div>
            <div class="mb-3">
                <textarea class="imagem" name="imagem" required>Imagem</textarea>
            </div>


            <button type="submit" class="btn btn-primary">Adicionar</button>
            <a class="btn btn-warning " href="{{url('veiculos/')}}">Voltar</a>

            
            </form>
            @endif
          </div>
        </div>
      </div>
  
    </div>
  </div>
</div>
@endsection