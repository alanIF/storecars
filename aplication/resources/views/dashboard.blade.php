@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Concessionária</h4>
          </div>
          <div class="card-body">
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php 
                      $i=0;
                    
                    ?>

<div class="row">
                @foreach($veiculos as $v)
              
                <div class="col-sm-3">
                <div class="card" >
                  
                <div class="card-body">
                  <h3 class="card-title text-center">                
                  {{$v->nome}}</h3>
                 <div class="card-text  "    > <?php echo $v->imagem ;?></div>
                  <p class="card-text">Preço: {{$v->preco}}</p>
                  <p class="card-text">Porta Malas  {{$v->porta_malas}}</p>

                </div>
              </div>
              </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>
</div>
@endsection
