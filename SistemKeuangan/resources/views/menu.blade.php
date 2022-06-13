<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><H5>Sistem Pencatatan Keuangan</H5></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">TRANSAKSI</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="{{url('inputdata')}}"> <i class="menu-icon fa fa-laptop"></i>Input Data</a>
                    </li>

                    <h3 class="menu-title">MASTER</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="{{url('transaksi')}}"> <i class="menu-icon fa fa-laptop"></i>Pencatatan</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{url('user')}}"> <i class="menu-icon fa fa-laptop"></i>User</a>
                    </li>
                    <li class="active">
                        <a href="{{url('laporan')}}"> <i class="menu-icon fa fa-dashboard"></i>Laporan</a>
                    </li>
                    <h3 class="menu-title">Pengaturan</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>