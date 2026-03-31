<section id="features" class="py-12 features-section">
    <div class="text-center mb-8" style="position: relative; z-index: 2;">
        <h2 class="fw-bold mb-3">Funcionalidades que tornam seu fluxo mais eficiente</h2>
        <p class="text-muted fs-6">Tudo que você precisa para criar, priorizar e concluir tarefas com velocidade.</p>
    </div>

    @php
        $features = [
                ['icon' => 'bi-list-check', 'color' => 'primary', 'title' => 'Gestão de tarefas', 'description' => 'Crie, edite e organize tarefas com status e etiquetas visuais.'],
                ['icon' => 'bi-bar-chart-line', 'color' => 'info', 'title' => 'Controle de produtividade', 'description' => 'Acompanhe desempenho e métricas de conclusão de forma direta.'],
                ['icon' => 'bi-layout-text-window', 'color' => 'success', 'title' => 'Interface intuitiva', 'description' => 'Layout moderno e simples para começar a usar sem curva de aprendizagem.'],
                ['icon' => 'bi-clock-history', 'color' => 'warning', 'title' => 'Planejamento diário', 'description' => 'Defina prazos, lembretes e alocação de tempo para cada tarefa.'],
                ['icon' => 'bi-people', 'color' => 'danger', 'title' => 'Colaboração segura', 'description' => 'Compartilhe tarefas, roles e status com times em tempo real.'],
                ['icon' => 'bi-arrow-repeat', 'color' => 'secondary', 'title' => 'Automação inteligente', 'description' => 'Automatize repetições, priorização e notificações com regras simples.'],
            ];
        @endphp

        <div class="row g-4">
            @foreach($features as $feature)
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100 border-0 shadow-sm p-4">
                        <div class="mb-3 fs-2 text-{{ $feature['color'] }}"><i class="bi {{ $feature['icon'] }}"></i></div>
                        <h5 class="fw-bold">{{ $feature['title'] }}</h5>
                        <p class="text-muted">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>