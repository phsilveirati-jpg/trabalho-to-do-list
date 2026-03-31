<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('status')->orderBy('name')->get();

        return view('admin.users', compact('users'));
    }

    public function activate(User $user): RedirectResponse
    {
        $user->status = 'active';
        $user->save();

        return redirect()->route('admin.users.index')->with('status', "Usuário {$user->name} foi ativado.");
    }

    public function deactivate(User $user): RedirectResponse
    {
        $user->status = 'pending';
        $user->save();

        return redirect()->route('admin.users.index')->with('status', "Usuário {$user->name} foi colocado como pendente.");
    }
}
