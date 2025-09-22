<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class StatsWidget extends Component
{
    /**
     * @var array<int, array<string, string|int>>
     */
    public array $metrics = [];

    public function mount(): void
    {
        $this->metrics = [
            [
                'label' => 'Reuniones de hoy',
                'value' => 4,
                'trend' => '+12%',
                'trend_label' => 'vs. ayer',
                'icon' => 'calendar',
            ],
            [
                'label' => 'Tasa de asistencia',
                'value' => '92%',
                'trend' => '+5%',
                'trend_label' => 'últimos 7 días',
                'icon' => 'check-circle',
            ],
            [
                'label' => 'Notas registradas',
                'value' => 28,
                'trend' => '+18%',
                'trend_label' => 'este mes',
                'icon' => 'clipboard',
            ],
            [
                'label' => 'Satisfacción promedio',
                'value' => '4.6',
                'trend' => '+0.3',
                'trend_label' => 'en escala 1-5',
                'icon' => 'sparkles',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.stats-widget');
    }
}
