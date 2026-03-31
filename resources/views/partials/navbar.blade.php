<nav>
    <a href="/tasks">Tasks</a>

    @auth
        @if(auth()->user()->is_admin)
            <a href="{{ route('admin.dashboard') }}">Admin</a>
        @endif

        <span>{{ auth()->user()->name }}</span>

        <form method="POST" action="/logout" style="display: inline">
            @csrf
            <button>Sair</button>
        </form>
    @endauth
</nav>