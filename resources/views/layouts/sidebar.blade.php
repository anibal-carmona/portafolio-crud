<nav class="navbar navbar-light navbar-vertical navbar-expand-xl navbar-card">

    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            {{-- <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> --}}

        </div>

        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <div class="d-flex align-items-center py-3">
                {{-- <img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /> --}}
                <span class="font-sans-serif">Portafolio</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Home
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages-->
                    <a class="nav-link" href="../app/calendar.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-calendar-alt"></span></span><span
                                class="nav-link-text ps-1">Calendar</span>
                        </div>
                    </a>

                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="dashboard">
                        <li class="nav-item"><a class="nav-link" href="../index.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/analytics.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/crm.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/e-commerce.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E
                                        commerce</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/project-management.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Management</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/saas.html" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App2
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages--><a class="nav-link active" href="../pages/starter.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link" href="../pages/landing.html" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span>
                        </div>
                    </a>
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="user">
                        <li class="nav-item"><a class="nav-link" href="../pages/user/profile.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/user/settings.html"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                </li>

            </ul>

        </div>
    </div>
</nav>