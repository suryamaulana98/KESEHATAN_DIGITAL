<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
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
                <li>
                    <a class="" href="{{ route('dashboardAdmin.index') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('artikelAdmin.index') }}" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Data Artikel</span>
                    </a>
                </li>
                <li>
                    <a class="" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-email"></i>
                        <span class="hide-menu">Data Dapodik</span>
                    </a>

                </li>
                <li>
                    <a class="" href="{{ route('userAdmin.index') }}" aria-expanded="false">
                        <i class="ti-user"></i>
                        <span class="hide-menu">Data User
                        </span>
                    </a>

                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
