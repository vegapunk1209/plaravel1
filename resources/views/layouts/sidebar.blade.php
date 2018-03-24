<?php
function current_page($url = '/'){
  return request()->path() == $url;
}
?>
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        @if (Auth::user()->avatar == null)
          <img src="/dist/img/user.jpg" class="img-circle" alt="User Image">
        @else  
          <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image">
        @endif
        </div>
        <div class="pull-left info">
          <p>
          @if (Auth::user()->social_name == null)
            {{ Auth::user()->name}}
          @else
            {{ Auth::user()->social_name}}
          @endif
          </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
  
        <li class="treeview">
          <a href="#"><i class="fa fa-map-marker"></i> <span>Ubicaciones</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("ubicaciones")}}"><i class="fa fa-street-view" aria-hidden="true"></i> Registro de Ubicaciones</a></li>
            <li><a href="{{route("UbicacionesListar")}}"><i class="fa fa-list" aria-hidden="true"></i> Listado de Ubicaciones</a></li>
          </ul>
        </li>
      
        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Monedas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">            
            <li><a href="{{route("MonedasListar")}}"><i class="fa fa-money" aria-hidden="true"></i> Listado de Monedas</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-bed"></i> <span>Cuartos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("CuartosListar")}}"><i class="fa fa-list" aria-hidden="true"></i> Listado de Cuartos</a></li>            
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-globe"></i> <span>Zonas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("ZonasListar")}}"><i class="fa fa-list" aria-hidden="true"></i> Listado de Zonas</a></li>            
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("UsuariosListar")}}"><i class="fa fa-list" aria-hidden="true"></i> Listado de Usuarios</a></li>            
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-bar-chart"></i> <span>Reportes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("ReportedeUsuarios")}}"><i class="fa fa-user" aria-hidden="true"></i> Reportes de Usuarios</a></li>
            <li><a href="{{route("ReportedeUbicaciones")}}"><i class="fa fa-map-marker" aria-hidden="true"></i> Reportes de Ubicaciones</a></li>
          </ul>
        </li>
      
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>