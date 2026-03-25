<nav>
    <a href="/tasks">Tasks</a>

    @auth
        <span>{{ auth()->user()->name }}</span>

        <form method="POST" action="/logout">
            @csrf
            <button>Sair</button>
        </form>
    @endauth
</nav>