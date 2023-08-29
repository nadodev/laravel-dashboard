<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="{{ asset('assets/brand/coreui.svg#full')}}"></use>
      </svg>
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="{{asset('assets/brand/coreui.svg#signet')}}"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link" href="/admin/dashboard">
          <svg class="nav-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
          </svg> Dashboard</a></li>
      <li class="nav-title">Modulos</li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
          </svg> Usuarios</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="/admin/usuarios/listar"><span class="nav-icon"></span> Listar</a></li>
          <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Cadastrar</a></li>
        </ul>
      </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                </svg> Types</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('all.type')  }}"><span class="nav-icon"></span> All Types</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('add.type')  }}"><span class="nav-icon"></span> Add Types</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                </svg> Amenities</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('all.amenities')  }}"><span class="nav-icon"></span> All Amenities</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('index.amenities')  }}"><span class="nav-icon"></span> Add Amenities</a></li>
            </ul>
        </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-cursor') }}"></use>
          </svg> Noticias</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span> Listar</a></li>
          <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span>Cadastrar</a></li>
        </ul>
      </li>
      <li class="nav-divider"></li>
      <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
          </svg> Configurações</a></li>
    </ul>
  </div>
