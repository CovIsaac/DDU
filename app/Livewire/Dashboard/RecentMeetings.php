<?php

namespace App\Livewire\Dashboard;

use Carbon\Carbon;
use Livewire\Component;

class RecentMeetings extends Component
{
    /**
     * @var array<int, array<string, string>>
     */
    public array $meetings = [];

    public function mount(): void
    {
        $this->meetings = [
            [
                'title' => 'Kick-off Proyecto Atlas',
                'owner' => 'Laura Martínez',
                'time' => Carbon::parse('today 09:30')->isoFormat('DD MMM · HH:mm'),
                'status' => 'Completada',
            ],
            [
                'title' => 'Revisión Sprint 12',
                'owner' => 'Equipo Producto',
                'time' => Carbon::parse('today 13:00')->isoFormat('DD MMM · HH:mm'),
                'status' => 'En curso',
            ],
            [
                'title' => 'One-to-one Dirección',
                'owner' => 'Andrés Duarte',
                'time' => Carbon::parse('tomorrow 11:00')->isoFormat('DD MMM · HH:mm'),
                'status' => 'Programada',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.recent-meetings');
    }
}
