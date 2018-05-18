<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group">
                    <form action="/materiale/risultati" method="post">
                        {{csrf_field()}}
                        <div class="input-group form-inline">
                            <input type="text" class="form-control" placeholder="Cerca..." id="testo" name="testo" value="{{old('testo')}}">
                            <button class="btn btn-primary" type="submit"value="">
                                <i class="fa fa-search fa-lg"></i>
                            </button>
                        </div>
                   </form>
                </div>
            </li>
            <li>
                <a href="/home" class="active"><i class="fa fa-tachometer"></i> Dashboard</a>
            </li>
            @role('Admin')
            <li>
                <a href="#"><i class="fa fa-gear fa-fw"></i> Admin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ route('users.index') }}"><i class="fa fa-users"></i>&nbsp; Utenti</a>
                    </li>
                    <li>
                        <a href="{{ route('areaServizi.index') }}"><i class="fa fa-bank"></i>&nbsp; Aree Servizi</a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}"><i class="fa fa-key"></i>&nbsp; Ruoli</a>
                    </li>
                    <li>
                        <a href="{{ route('permissions.index') }}"><i class="fa fa-lock"></i>&nbsp; Permessi</a>
                    </li>
                </ul>
            </li>
            @endrole
        </ul>

    </div>
</div>