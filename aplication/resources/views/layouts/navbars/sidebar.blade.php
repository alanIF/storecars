<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a class="simple-text logo-normal">
      Sig Cars
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" >
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('veiculos/')}}">
          <i class="fa fa-car"></i>
            <p>Veiculos</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('transacao/')}}">
        <i class="fa fa-bank"></i>            <p>Transacoes</p>
        </a>
      </li>
     
     
      
      
    </ul>
  </div>
</div>
