<header id="kt_header" class="sticky-top py-3">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="d-flex align-items-center text-decoration-none" href="{{ route('landing') }}">
            <span class="fs-3 fw-bold text-primary">Todo App</span>
        </a>

        <nav class="d-flex align-items-center gap-2">
            @auth
                <a class="btn btn-sm btn-outline-primary" href="{{ route('tasks.page') }}">Dashboard</a>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Entrar</a>
                <a class="btn btn-sm btn-primary btn-primary-action" href="{{ route('register') }}">Cadastrar</a>
            @endauth
        </nav>
    </div>
</header>