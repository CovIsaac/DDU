<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class QuickActions extends Component
{
    /**
     * @var array<int, array<string, string>>
     */
    public array $actions = [
        [
            'label' => 'Programar nueva reunión',
            'description' => 'Coordina agendas y envía invitaciones en segundos.',
            'icon' => 'plus',
            'href' => '/meetings',
        ],
        [
            'label' => 'Registrar minuta',
            'description' => 'Captura acuerdos clave y responsables.',
            'icon' => 'document-text',
            'href' => '/notes',
        ],
        [
            'label' => 'Analítica DDU',
            'description' => 'Revisa métricas de impacto y satisfacción.',
            'icon' => 'chart-bar',
            'href' => '/analytics',
        ],
    ];

    public function render()
    {
        return view('livewire.dashboard.quick-actions');
    }
}
