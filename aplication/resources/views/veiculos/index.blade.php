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
                    Nome
                  </th>
                  <th>
                    Imagem
                  </th>
                  <th>
                    Preço (R$)
                  </th>
                  <th>
                    Porta Malas (Kg)
                  </th>
                  <th colspan="2">
                    Ações
                  </th>
                 
                </thead>
                <tbody>
                @foreach($veiculos as $v)
                        <tr>

                            <td >{{$v->id}}</td>
                            <td>{{$v->nome}}</td>

                            <td><?php echo $v->imagem?></td>
                            <td>{{$v->preco}}</td>
                            <td>{{$v->porta_malas}}</td>


                            <td><a class="btn btn-warning " href="veiculos/{{$v->id}}/edit"><i class="fa fa-edit" ></i></a> 
</td><td>
                             <form action="veiculos/delete/{{$v->id}}" method="post"> @csrf @method('delete')<button class="btn btn-danger"><i class="fa fa-trash" ></i></button></form></td>
                            </tr>
                            @endforeach
                </tbody>
                <tfoot>
                            <tr >
                                <td colspan='7'><a class="btn btn-primary " href="{{url('veiculos/new')}}"><i class="fa fa-plus" ></i></a></td>
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