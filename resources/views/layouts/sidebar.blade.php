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
                    <a class="nav-link {{  request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Inicio</span>
                        </div>
                    </a>

                </li>

                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages--><a class="nav-link" href="#" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-plane"></span></span><span class="nav-link-text ps-1">Remuneración</span>
                        </div>
                    </a>

                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="{{  request()->routeIs('varios.*') ? 'true' : 'false' }}" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span>
                            <span class="nav-link-text ps-1">Varios</span>
                        </div>
                    </a>
                    <ul class="nav collapse false {{  request()->routeIs('varios.*') ? 'show' : '' }}" id="dashboard">                        
                        <li class="nav-item"><a class="nav-link {{  request()->routeIs('varios.video') ? 'active' : '' }}" href="{{ route('varios.video') }}" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Video</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="fas fa-user"></span></span>
                            <span class="nav-link-text ps-1">User</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="user">
                        <li class="nav-item"><a class="nav-link" href="#" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text ps-1">Profile</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text ps-1">Settings</span>
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