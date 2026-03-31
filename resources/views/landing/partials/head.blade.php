<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Todo App</title>
<meta name="description" content="Sistema de gerenciamento de tarefas - To-Do List" />

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/landing.js'])

<style>
    body {
        font-family: 'Inter', sans-serif;
    }
</style>