<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon">
            <span class="toggle-line"></span>
        </span>
    </button>
    <a class="navbar-brand me-1 me-sm-3" href="#">
        <div class="d-flex align-items-center">
            {{-- <img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /> --}}
            <span class="font-sans-serif">Portafolio</span>
        </div>
    </a>

    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">

        {{-- Perfil --}}
        <li class="nav-item">{{ auth()->user()->name }}</li>

        <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset('/assets/img/team/avatar.png') }}" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    {{-- <span class="dropdown-item text-center">{{ auth()->user()->name }}</span> --}}
                    <a class="dropdown-item" href="../pages/user/settings.html">Opciones</a>
                    <div class="dropdown-divider"></div>

                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Cerrar sesión</button>
                    </form>

                </div>
            </div>
        </li>
    </ul>
</nav>