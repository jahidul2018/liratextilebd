<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="{{ route('admin.home') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">home</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ url('/admin', []) }}">
                            <span class="pcoded-mtext">Home</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Manage products Photo</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.man') }}">
                            <span class="pcoded-mtext">Manage man photo</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.woman') }}">
                            <span class="pcoded-mtext">Manage women photo</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Manage clients\own brand </span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.client') }}">
                            <span class="pcoded-mtext">Manage clients</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.own') }}">
                            <span class="pcoded-mtext">Manage own brand</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Manage site logo </span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.logo') }}">
                            <span class="pcoded-mtext">Manage logo</span>
                        </a>
                    </li>
                </ul>
                
            </li>
            <li class="pcoded-hasmenu">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                               <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                 {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </a>
            </li>
        </ul>
    </div>
</nav>