<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container"></div>
    <div class="navbar-header">
        <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Top Navigation: Left Menu -->
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i> Home</a></li>
    </ul>
    <!-- Sidebar -->
    @auth()
        @include('layouts.sidebar')
    @endauth
    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">
        @auth()
        <li class="dropdown navbar-inverse">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">
                <i class="fa fa-user fa-fw">&nbsp;</i>{{ Auth::user()->name }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                @role('Admin')
                <li><a href="/"><i class="fa fa-gear fa-fw"></i> Impostazioni</a>
                </li>
                @endrole
                <li class="divider"></li>
                <li>
                    <a href="/changePassword"><i class="fa fa-user fa-fw"></i>
                        Modifica Password
                    </a>
                </li>


                <li class="divider"></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}"></i>Registrazione</a></li>
        @endauth
    </ul>
</nav>