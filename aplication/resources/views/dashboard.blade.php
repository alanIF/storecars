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
                @foreach($veiculos as $v)
                <?php 
                
                
                ?>
                <div class="card" >
                  
                <div class="card-body">
                  <h4 class="card-title">                <?php echo $v->imagem?>
 <br/>{{$v->nome}}</h4>
                  <p class="card-text">Preço: {{$v->preco}}</p>
                  <p class="card-text">Porta Malas  {{$v->porta_malas}}</p>

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
@endsection
