<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Meetings extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.meetings')
            ->title('Reuniones DDU');
    }
}
