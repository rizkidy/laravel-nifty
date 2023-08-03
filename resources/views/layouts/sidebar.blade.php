<nav id="mainnav-container" class="mainnav">
    <div class="mainnav__inner">

        <!-- Navigation menu -->
        <div class="mainnav__top-content scrollable-content pb-5">

            <!-- Profile Widget -->
            <div class="mainnav__profile mt-3 d-flex3">

                <div class="mt-2 d-mn-max"></div>

                <!-- Profile picture  -->
                <div class="mininav-toggle text-center py-2">
                    <img class="mainnav__avatar img-md rounded-circle border"
                        src="{{asset('assets/img/profile-photos/1.png')}}" alt="Profile Picture">
                </div>

                <div class="mininav-content collapse d-mn-max">
                    <div class="d-grid">

                        <!-- User name and position -->
                        <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav"
                            aria-expanded="false" aria-controls="usernav">
                            <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                <h6 class="mb-0 me-3">Aaron Chavez</h6>
                            </span>
                            <small class="text-muted">Administrator</small>
                        </button>

                        <!-- Collapsed user menu -->
                        <div id="usernav" class="nav flex-column collapse">
                            <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                                <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
                                <span class="badge bg-danger rounded-pill">14</span>
                            </a>
                            <a href="#" class="nav-link">
                                <i class="demo-pli-male fs-5 me-2"></i>
                                <span class="ms-1">Profile</span>
                            </a>
                            <a href="#" class="nav-link">
                                <i class="demo-pli-gear fs-5 me-2"></i>
                                <span class="ms-1">Settings</span>
                            </a>
                            <a href="#" class="nav-link">
                                <i class="demo-pli-computer-secure fs-5 me-2"></i>
                                <span class="ms-1">Lock screen</span>
                            </a>
                            <a href="#" class="nav-link">
                                <i class="demo-pli-unlock fs-5 me-2"></i>
                                <span class="ms-1">Logout</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End - Profile widget -->

            <!-- Navigation Category -->
            <div class="mainnav__categoriy py-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                <ul class="mainnav__menu nav flex-column">

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="/" class="nav-link"><i class="demo-pli-home fs-5 me-2"></i>
                            <span class="nav-label ms-1">Dashboard</span>
                        </a>

                    </li>
                    <!-- END : Link with submenu -->

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i
                                class="demo-pli-receipt-4 fs-5 me-2"></i>
                            <span class="nav-label ms-1">Tables</span>
                        </a>

                        <!-- Tables submenu list -->
                        <ul class="mininav-content nav collapse">

                            <li class="nav-item">
                                <a href="/tables/static-table" class="nav-link">Static Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="/tables/gridjs" class="nav-link">Gridjs</a>
                            </li>
                            <li class="nav-item">
                                <a href="/tables/tabulator" class="nav-link">Tabulator</a>
                            </li>

                        </ul>
                        <!-- END : Tables submenu list -->

                    </li>
                    <!-- END : Link with submenu -->

                </ul>
            </div>
            <!-- END : Navigation Category -->

            <!-- Widget -->
            <div class="mainnav__profile">

                <!-- Widget buttton form small navigation -->
                <div class="mininav-toggle text-center py-2 d-mn-min">
                    <i class="demo-pli-monitor-2"></i>
                </div>

                <div class="d-mn-max mt-5"></div>

                <!-- Widget content -->
                <div class="mininav-content collapse d-mn-max">
                    <div class="d-grid px-3 mt-3">
                        <a href="/login" class="btn btn-sm btn-danger">Logout</a>
                    </div>
                </div>
            </div>
            <!-- End - Profile widget -->

        </div>
        <!-- End - Navigation menu -->

    </div>
</nav>