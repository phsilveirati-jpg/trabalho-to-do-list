<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 py-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Todo List</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/tasks">Tasks</a></li>

                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
                @endguest

                @auth
                    @if(auth()->user()->is_admin)
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Admin</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Perfil</a></li>
                @endauth
            </ul>

            @auth
                <span class="navbar-text me-3">{{ auth()->user()->name }}</span>
                <form class="d-inline" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-secondary btn-sm">Sair</button>
                </form>
            @endauth
        </div>
    </div>
</nav>