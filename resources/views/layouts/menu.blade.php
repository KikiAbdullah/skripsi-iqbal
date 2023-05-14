<!-- Main navbar -->
<div class="navbar navbar-expand-xl navbar-static shadow">
    <div class="container-fluid">
        <div class="flex-1">
            <a href="{{ route('siteurl') }}" class="d-inline-flex align-items-center">
                <img src="{{ asset('workplex') }}/img/logo.png" class="logo mb-6" style="max-width: 250px;" alt="" />
            </a>
        </div>

        <div
            class="d-flex w-100 w-xl-auto overflow-auto overflow-xl-visible scrollbar-hidden border-top border-top-xl-0 order-1 order-xl-0 pt-2 pt-xl-0 mt-2 mt-xl-0">
            <ul class="nav gap-1 justify-content-center flex-nowrap flex-xl-wrap mx-auto">
                <li class="nav-item">
                    <a href="{{ route('siteurl') }}"
                        class="navbar-nav-link rounded {{ $title == 'Dashboard' ? 'active' : '' }}">
                        <i class="ph-house me-2"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('diagnosa.index') }}"
                        class="navbar-nav-link rounded {{ $title == 'Diagnosa' ? 'active' : '' }}">
                        <i class="ph-activity me-2"></i>
                        Diagnosa
                    </a>
                </li>


                @canany(['master_kerusakan', 'master_gejala', 'master_rule'])
                <li class="nav-item nav-item-dropdown-xl dropdown">
                    <a href="#"
                        class="navbar-nav-link dropdown-toggle rounded {{ in_array($title, ['Kerusakan', 'Gejala', 'Rule']) ? 'active' : '' }}"
                        data-bs-toggle="dropdown">
                        <i class="ph-database me-2"></i>
                        Master
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header">General</div>
                        @can('master_tipe_motor')
                        <a href="{{ route('master.tipe-motor.index') }}"
                            class="dropdown-item {{ $title == 'Tipe Motor' ? 'active' : '' }}">
                            <i class="ph-database me-2"></i>
                            Tipe Motor
                        </a>
                        @endcan

                        @can('master_kerusakan')
                        <a href="{{ route('master.kerusakan.index') }}"
                            class="dropdown-item {{ $title == 'Kerusakan' ? 'active' : '' }}">
                            <i class="ph-database me-2"></i>
                            Kerusakan
                        </a>
                        @endcan
                        @can('master_gejala')
                        <a href="{{ route('master.gejala.index') }}"
                            class="dropdown-item {{ $title == 'Gejala' ? 'active' : '' }}">
                            <i class="ph-database me-2"></i>
                            Gejala
                        </a>
                        @endcan
                        @can('master_rule')
                        <a href="{{ route('master.rule.index') }}"
                            class="dropdown-item {{ $title == 'Rule' ? 'active' : '' }}">
                            <i class="ph-database me-2"></i>
                            Rule
                        </a>
                        @endcan

                        @can('master_bengkel')
                        <a href="{{ route('master.bengkel.index') }}"
                            class="dropdown-item {{ $title == 'Bengkel' ? 'active' : '' }}">
                            <i class="ph-database me-2"></i>
                            Bengkel
                        </a>
                        @endcan
                    </div>
                </li>
                @endcanany

                <li class="nav-item nav-item-dropdown-xl dropdown">
                    <a href="#"
                        class="navbar-nav-link dropdown-toggle rounded {{ in_array($title, ['Permissions', 'Roles', 'User']) ? 'active' : '' }}"
                        data-bs-toggle="dropdown">
                        <i class="ph-gear me-2"></i>
                        Setup
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header">Access Control</div>
                        @can('view_permimssions')
                        <a href="{{ route('permission') }}"
                            class="dropdown-item {{ $title == 'Permissions' ? 'active' : '' }}">
                            <i class="ph-gear-six me-2"></i>
                            Permissions
                        </a>
                        @endcan
                        @can('view_roles')
                        <a href="{{ route('role') }}" class="dropdown-item {{ $title == 'Roles' ? 'active' : '' }}">
                            <i class="ph-user-gear me-2"></i>
                            Roles
                        </a>
                        @endcan
                        @can('view_users')
                        <a href="{{ route('user-setup.user.index') }}"
                            class="dropdown-item {{ $title == 'User' ? 'active' : '' }}">
                            <i class="ph-users me-2"></i>
                            Users
                        </a>
                        @endcan
                    </div>
                </li>

            </ul>
        </div>

        <ul class="nav gap-1 flex-xl-1 justify-content-end order-0 order-xl-1">

            <li class="nav-item nav-item-dropdown-xl dropdown">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1 avatar-custom"
                    data-bs-toggle="dropdown">
                    <div class="status-indicator-container status-indicator-container-custom">
                        <img src="{{ asset('assets/images/placeholder.jpg') }}" class="w-32px h-32px rounded-pill"
                            alt="">
                        <span class="status-indicator status-indicator-custom bg-success"></span>
                    </div>
                    <span class="d-none d-md-inline-block mx-md-2">{{ auth()->user()->name ?? '' }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <label href="#" class="dropdown-item cursor-pointer" for="sc_ls_c">
                        <i class="ph-moon me-2"></i>
                        Dark Theme
                        <div class="form-check form-switch form-check-reverse ms-auto">
                            <input type="checkbox" class="form-check-input" id="sc_ls_c" onchange="setTheme(this)">
                        </div>
                    </label>

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('permission.list') }}" class="dropdown-item"><i class="ph-user-list me-2"></i>
                        Permissions List</a>
                    <a href="#!" onclick="changepassword('{{ route('changepassword') }}')" class="dropdown-item"><i
                            class="ph-lock-key me-2"></i> Change Password</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                        class="dropdown-item"> <i class="ph-sign-out me-2"></i>
                        Logout</a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <form id="frm-toggle-theme" action="{{ route('toggle.theme') }}" method="GET"
                        style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->