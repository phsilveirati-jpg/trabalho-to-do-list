@extends('layouts.admin')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Usuários</h1>
    <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-indigo-600 text-white rounded">Voltar ao Dashboard</a>
</div>

@if(session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">{{ session('status') }}</div>
@endif

<table id="kt_datatable_responsive" class="table table-striped border rounded gy-5 gs-7">
    <thead>
        <tr class="fw-semibold fs-6 text-gray-800">
            <th class="min-w-150px" data-priority="1">Nome</th>
            <th class="min-w-300px">Email</th>
            <th class="min-w-300px">Status</th>
            <th>Admin</th>
            <th class="min-w-100px" data-priority="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr class="{{ $user->status === 'pending' ? 'bg-yellow-50' : 'bg-white' }}">
                <td class="border border-gray-300 p-2">{{ $user->name }}</td>
                <td class="border border-gray-300 p-2">{{ $user->email }}</td>
                <td class="admin-status-cell">{{ ucfirst($user->status) }}</td>
                <td>{{ $user->is_admin ? 'Sim' : 'Não' }}</td>
                <td class="border border-gray-300 p-2">
                    @if(! $user->is_admin)
                        @if($user->status === 'pending')
                            <form method="POST" action="{{ route('admin.users.activate', $user) }}" class="inline">
                                @csrf
                                @method('PATCH')
                                <button class="px-3 py-1 bg-green-600 text-white rounded">Ativar</button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('admin.users.deactivate', $user) }}" class="inline">
                                @csrf
                                @method('PATCH')
                                <button class="px-3 py-1 bg-orange-600 text-white rounded">Pendente</button>
                            </form>
                        @endif
                    @else
                        —
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
