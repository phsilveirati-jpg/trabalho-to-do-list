<li>
    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PATCH')
        <button>
            {{ $task->completed ? '✔️' : '❌' }}
        </button>
    </form>

    {{ $task->title }}

    <form method="POST" action="{{ route('tasks.destroy', $task) }}">
        @csrf
        @method('DELETE')
        <button>Excluir</button>
    </form>
</li>