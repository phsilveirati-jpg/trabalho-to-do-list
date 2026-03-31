@extends('layouts.admin')

@section('content')
    <div class="row gy-4">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title fw-bold fs-5 mb-2">Relatório geral</h3>
                    <p class="text-muted mb-3">Visão rápida: todos usuários, status e ações.</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="fw-bold fs-3">{{ isset($users) ? $users->count() : 0 }}</span>
                        <span class="badge bg-success">Ativo</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title fw-bold fs-5 mb-2">Usuários</h3>
                    <p class="text-muted mb-3">Gerencie usuários, ativações e permissões.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-sm">Ver painel</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title fw-bold fs-5 mb-2">Ações</h3>
                    <p class="text-muted mb-3">Monitoramento de atividades recentes e tarefas a fazer.</p>
                    <span class="badge bg-info">Em breve: Tasks</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row gy-4 mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold fs-6 mb-3">Resumo de usuários</h4>
                    <p class="text-muted">Lista rápida de novos cadastros e status de aprovação.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
