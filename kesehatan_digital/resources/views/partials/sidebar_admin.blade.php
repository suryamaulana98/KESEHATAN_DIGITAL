<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<script src="https://kit.fontawesome.com/d448aebe56.js" crossorigin="anonymous"></script>
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="{{ asset('template_admin/assets/images/users/2.jpg') }}" alt="user-img" class="img-circle">
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                        data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave
                        Gection
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-user"></i> My Profile</a>
                        <a href="pages-login.html" class="dropdown-item">
                            <i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="{{ request()->is('dashboard-admin') ? 'active' : '' }}">
                    <a href="{{ route('dashboardAdmin.index') }}" aria-expanded="false">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="{{ request()->routeIs('artikelAdmin.index', 'artikelAdmin.create') ? 'active' : '' }}">
                    <a href="{{ route('artikelAdmin.index') }}" aria-expanded="false">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="hide-menu">Data Artikel</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('dapodikAdmin.index') ? 'active' : '' }}"
                        href="{{ route('dapodikAdmin.index') }}" aria-expanded="false">
                        <i class="fa-solid fa-person"></i>
                        <span class="hide-menu">Data Dapodik</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('kategoriAdmin.index') ? 'active' : '' }}"
                        href="{{ route('kategoriAdmin.index') }}" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Data Kategori</span>
                    </a>
                </li>
                <li>

                    <a class="{{ request()->is('userAdmin.index') ? 'active' : '' }}"
                        href="{{ route('userAdmin.index') }}" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span class="hide-menu">Data Admin
                        </span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('ttd') ? 'active' : '' }}" href="{{ route('ttd') }}"
                        aria-expanded="false">
                        <i class="fa-solid fa-tablets"></i>
                        <span class="hide-menu">Ttd
                        </span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('kelas.index') ? 'active' : '' }}" href="{{ route('kelas.index') }}"
                        aria-expanded="false">
                        <i class="fa-solid fa-people-line"></i>
                        <span class="hide-menu">Kelas
                        </span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('vaksin') ? 'active' : '' }}" href="{{ route('vaksin') }}"
                        aria-expanded="false">
                        <i class="fa-solid fa-virus-covid"></i>
                        <span class="hide-menu">Vaksinasi
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
