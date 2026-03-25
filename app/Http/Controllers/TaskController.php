<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // 📄 Página principal (lista)
    public function index()
    {
        $tasks = auth()->user()->tasks()->latest()->get();

        return view('tasks.page', compact('tasks'));
    }

    // ➕ Criar tarefa
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        Task::create([
            'user_id' => auth()->id(),
            'title' => $request->title
        ]);

        return back();
    }

    // ✅ Alternar status (feito / não feito)
    public function update(Task $task)
    {
        // segurança básica
        if ($task->user_id !== auth()->id()) {
            abort(403);
        }

        $task->update([
            'completed' => !$task->completed
        ]);

        return back();
    }

    // ❌ Deletar
    public function destroy(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403);
        }

        $task->delete();

        return back();
    }
}