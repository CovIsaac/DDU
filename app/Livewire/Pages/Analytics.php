<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Analytics extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.analytics')
            ->title('Analítica DDU');
    }
}
