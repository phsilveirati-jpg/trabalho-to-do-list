<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Nova tarefa">
    <button type="submit">Adicionar</button>
</form>