<header id="topnav">
    <!-- Inicio TopBar -->
    <div class="navbar-custom color_identidade">
        <div class="container-fluid">

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ url('dashboard') }}" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ url('images/logo_black.png') }}" alt="" height="55">
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{ url('images/logo_black.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </li>                

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ url('images/users/user.jpg') }}" alt="user-image" class="rounded-circle">
                        <span style="color:#fff" class="pro-user-name ml-1">
                        {{Auth::user()->nome}} - @if(Auth::user()->tipo==1) ADMIN @else OPERAD @endif <i class="mdi mdi-chevron-down"></i><br>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Seja bem vindo !</h6>
                        </div>

                        <!-- item-->
                        <a href="{{url('verPerfil')}}" class="dropdown-item notify-item">
                            <i class="remixicon-account-circle-line"></i>
                            <span>Meu Perfil</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a class="dropdown-item notify-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="remixicon-logout-box-line"></i>
                            <span>Sair</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
  
            @if(Auth::user()->tipo==1)
            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li class="dropdown d-none d-lg-block">
                    <a style="color:#fff" class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        Utilizadores
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <!-- item-->
                        <a href="{{ url('registarUtilizador') }}" class="dropdown-item">
                            <i class="fe-user mr-1"></i>
                            <span>Criar Utilizador</span>
                        </a>
                        <!-- item-->
                        <a href="{{ url('listarUtilizadores') }}" class="dropdown-item">
                            <i class="fe-users mr-1"></i>
                            <span>Listar Utilizadores</span>
                        </a>
                    </div>
                </li>
            </ul>
            @endif
            
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Fim Topbar -->

    <!-- Inicio MenuBar -->
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{ url('dashboard') }}">
                            <i class="remixicon-home-4-fill"></i>Inicio
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="fas fa-users"></i>Registo de Participantes <div class="arrow-down"></div>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('registarPessoal')}}"><i class="fas fa-address-card mr-1"></i>Registar Pessoal</a>
                            </li>
                            <li>
                                <a href="{{ url('listarDelegado')}}"><i class="fe-list mr-1"></i>Listar Delegados</a>
                            </li>
                            <li>
                                <a href="{{ url('listarImprensa')}}"><i class="fe-list mr-1"></i>Listar Imprensa</a>
                            </li>
                            <li>
                                <a href="{{ url('listarServico')}}"><i class="fe-list mr-1"></i>Listar Serviços</a>
                            </li>
                        </ul>
                    </li> 
                   
                    <li class="has-submenu">
                        <a href="#">
                            <i class="remixicon-book-open-fill"></i>Relatórios<div class="arrow-down"></div>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('listarSugestaoEstudante')}}"><i class="fe-file-text mr-1"></i>XXXX</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#">
                            <i class="remixicon-bar-chart-fill"></i>Estatísticas <div class="arrow-down"></div>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{url('listarOrientadores')}}"><i class="fe-file-text mr-1"></i>XXXX</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu float-right">
                        <a href="#" onclick="window.history.back();">
                            <i class="fas fa-arrow-left"></i>Voltar
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('marcarPresenca') }}">
                            <i class="fas fa-qrcode"></i>Presença
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</header>
<script>
    
</script>