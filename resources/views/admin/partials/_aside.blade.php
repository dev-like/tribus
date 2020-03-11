<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                  <a href="{{ route('evento.index') }}">
                    <i class="fa fa-calendar"></i> <span> Informações do Evento </span>
                  </a>
                </li>

                <li>
                  <a href="{{ route('ministrantes.index') }}">
                    <i class="fa fa-users"></i> <span> Ministrantes </span>
                  </a>
                </li>

                <li>
                  <a href="{{ route('galeria.index') }}">
                    <i class="fa fa-file-image-o"></i> <span> Galeria </span>
                  </a>
                </li>

                @if(Auth::User()->nivel == 1)
                  <li>
                      <a href="{{ route('usuario.index') }}">
                          <i class="fa fa-user"></i> <span> Usuários </span>
                      </a>
                  </li>
                @endif
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
