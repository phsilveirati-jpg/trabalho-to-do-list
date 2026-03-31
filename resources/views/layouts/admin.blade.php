<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Todo App') }} - Admin</title>

    {{-- Metronic styles e icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/css/admin.css', 'resources/js/app.js', 'resources/js/admin.js'])

    <style>
        html, body { height: 100%; }
        body { min-height: 100vh; }
        .metronic-panel { background:#fff; border:1px solid #e5e7eb; border-radius:.5rem; box-shadow:0 1rem 2rem rgba(0,0,0,.05); }
        .metronic-header { background:#f8fafc; border-bottom:1px solid #e2e8f0; }
        .metronic-card-title { font-weight:700; color:#1f2937; }
        .metronic-badge-active { color:#0f5132; background:#d1e7dd; }
        .kt-aside { width: 250px; min-width: 250px; max-width: 250px; flex: 0 0 250px; }
        .menu-link.active { background:#e7f1ff; color:#3366ff; }
        .page { min-height: 100vh; min-width: 0; }
        .wrapper { display: flex; flex-direction: column; flex: 1 1 auto; min-width: 0; }
        #kt_content { flex: 1 1 auto; display: flex; flex-direction: column; min-width: 0; }
        #kt_content .container-fluid { flex: 1 1 auto; display: flex; flex-direction: column; min-width: 0; }
    </style>
</head>
<body id="kt_body" class="bg-light d-flex flex-column min-vh-100">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <aside class="kt-aside bg-white border-end d-flex flex-column">
                <div class="p-4 border-bottom">
                    <a href="{{ route('admin.dashboard') }}" class="fs-4 fw-bold text-primary text-decoration-none">Todo App</a>
                </div>
                <div class="menu menu-column menu-title-gray-500 menu-state-primary fw-bold fs-6 mt-3">
                    <div class="menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="menu-link d-flex align-items-center px-4 py-3 {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                            <i class="bi bi-speedometer2 me-2"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('admin.users.index') }}" class="menu-link d-flex align-items-center px-4 py-3 {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                            <i class="bi bi-people-fill me-2"></i>
                            <span class="menu-title">Usuários</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#" class="menu-link d-flex align-items-center px-4 py-3 {{ request()->routeIs('admin.tasks*') ? 'active' : '' }}">
                            <i class="bi bi-list-task me-2"></i>
                            <span class="menu-title">Tasks</span>
                        </a>
                    </div>
                </div>
            </aside>

            <div class="wrapper d-flex flex-column flex-row-fluid">
                <header class="d-flex align-items-center justify-content-between py-3 px-4 border-bottom bg-white">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-light me-3 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#kt_aside_mobile" aria-controls="kt_aside_mobile">
                            <i class="bi bi-list"></i>
                        </button>
                        <span class="fs-5 fw-bold text-muted">Painel Administração</span>
                    </div>

                    <div class="dropdown">
                        <a class="d-flex align-items-center text-decoration-none" href="#" id="kt_user_menu" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="me-2 text-end">
                                <div class="fw-bold">{{ auth()->user()->name ?? 'Usuário' }}</div>
                                <div class="text-muted small">{{ auth()->user()->email ?? '' }}</div>
                            </div>
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'U' ) }}&background=0D8ABC&color=fff" alt="Avatar" class="rounded-circle" width="44" height="44">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="kt_user_menu">
                            <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi bi-person-circle me-2"></i>Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="m-0">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Sair</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </header>

                <main class="flex-column-fluid flex-grow-1" id="kt_content">
                    <div class="container-fluid py-4">
                        @yield('content')
                    </div>
                </main>

                <footer class="py-3 text-center text-muted small border-top bg-white">
                    <div>© {{ date('Y') }} Todo App</div>
                    <div>v1.0.0</div>
                </footer>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://preview.keenthemes.com/html/metronic/assets/js/scripts.bundle.js"></script>
</body>
</html>
