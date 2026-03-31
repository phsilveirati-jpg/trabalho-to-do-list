@extends('layouts.app')

@section('content')

<h1>Usuários</h1>

@if(session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">{{ session('status') }}</div>
@endif

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr>
            <th class="border border-gray-300 p-2 text-left">Nome</th>
            <th class="border border-gray-300 p-2 text-left">Email</th>
            <th class="border border-gray-300 p-2 text-left">Status</th>
            <th class="border border-gray-300 p-2 text-left">Admin</th>
            <th class="border border-gray-300 p-2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr class="{{ $user->status === 'pending' ? 'bg-yellow-50' : 'bg-white' }}">
                <td class="border border-gray-300 p-2">{{ $user->name }}</td>
                <td class="border border-gray-300 p-2">{{ $user->email }}</td>
                <td class="border border-gray-300 p-2">{{ ucfirst($user->status) }}</td>
                <td class="border border-gray-300 p-2">{{ $user->is_admin ? 'Sim' : 'Não' }}</td>
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
