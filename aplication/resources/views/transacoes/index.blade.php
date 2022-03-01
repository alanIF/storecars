@extends('layouts.app', ['activePage' => 'veiculos', 'titlePage' => 'Veiculos'])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Transacoes</h4>
          </div>
          <div class="card-body">
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    #
                  </th>
                  <th>
                    Tipo
                  </th>
                  <th>
                    Descricao
                  </th>
                  <th>
                    Cliente 
                  </th>
                  <th>
                    Veiculo
                  </th>
                  <th>
                    Quantidade
                  </th>
                  <th>
                    Data Operacao
                  </th>
                  <th colspan="2">
                    Ações
                  </th>
                 
                </thead>
                <tbody>
                @foreach($transacao as $t)
                        <tr>

                            <td >{{$t->id}}</td>
                            <td >{{$t->tipo}}</td>
                            <td >{{$t->descricao}}</td>

                            <td>{{$t->cliente}}</td>

                            <td>{{$t->veiculo}}</td>
                            <td>{{$t->quantidade}}</td>
                            <td>{{$t->data_operacao}}</td>


                            <td><a class="btn btn-warning " href="transacao/{{$t->id}}/edit"><i class="fa fa-edit" ></i></a> 
</td><td>
                             <form action="transacao/delete/{{$t->id}}" method="post"> @csrf @method('delete')<button class="btn btn-danger"><i class="fa fa-trash" ></i></button></form></td>
                            </tr>
                            @endforeach
                </tbody>
                <tfoot>
                            <tr >
                                <td colspan='7'><a class="btn btn-primary " href="{{url('transacao/new')}}"><i class="fa fa-plus" ></i></a></td>
                            </tr>
                        </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>
</div>
@endsection