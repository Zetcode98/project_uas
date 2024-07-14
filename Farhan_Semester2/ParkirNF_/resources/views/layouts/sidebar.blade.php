<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-light" style="color: aqua;"><b>Parkir Kampus</b></span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              @auth
              @if (Auth::check())
                <a href="{{ route('profile.edit') }}" class="d-block">
                  {{ strtoupper(Auth::user()->name) ?? ""}}
                </a>
                <span class="text-primary">Role : {{ Auth::user()->role }}</span>
              @endif
              @endauth
              @guest
              <a href="#" class="d-block">Guest</a>
              @endguest
            </div>
        </div>
  
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="{{ route('kendaraan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Kendaraan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kampus.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Kampus
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('areaparkir.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-parking"></i>
                        <p>
                            Area Parkir
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('transaksi.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                @endif
                @endauth
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" class="nav-link"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  