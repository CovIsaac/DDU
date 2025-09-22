<?php

namespace App\Livewire\Meetings;

use Livewire\Component;

class MeetingList extends Component
{
    /**
     * @var array<int, array<string, string>>
     */
    public array $meetings = [
        [
            'title' => 'Alineación Comercial',
            'date' => 'Martes, 10:00',
            'owner' => 'Mariana Ríos',
            'status' => 'Confirmada',
            'tags' => ['Estrategia', 'Ventas'],
        ],
        [
            'title' => 'Diseño experiencia DDU',
            'date' => 'Miércoles, 15:30',
            'owner' => 'UX Guild',
            'status' => 'Pendiente',
            'tags' => ['Producto', 'Investigación'],
        ],
        [
            'title' => 'Seguimiento proveedores',
            'date' => 'Jueves, 09:00',
            'owner' => 'Operaciones',
            'status' => 'Reprogramada',
            'tags' => ['Logística'],
        ],
    ];

    public function render()
    {
        return view('livewire.meetings.meeting-list');
    }
}
